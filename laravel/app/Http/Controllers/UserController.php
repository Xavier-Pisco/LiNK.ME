<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Person;
use App\Models\Report;
use App\Models\User;
use App\Models\Like;
use App\Models\Notification;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Shows the user for a given id.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $this->authorize('show', $user);
        if (Auth::check() && Auth::user()->is_admin) {
            $reports = Report::all()->sortByDesc('id')->take(20);
            $my_profile = false;
            return view('pages.profile', ['user' => $user, 'reports' => $reports, 'my_profile' => $my_profile]);
        } else if (Auth::user()->user == $user){
            $my_profile = true;
            return view('pages.profile', ['user' => $user, 'my_profile' => $my_profile, 'posts' => $user->posts->where('deleted', '=', false)]);
        }else{
            $my_profile = false;
            return view('pages.profile', ['user' => $user, 'my_profile' => $my_profile, 'posts' => $user->posts->where('deleted', '=', false)]);
        }
    }

/*     public function getUserInfo(Request $request)
    {
        $id = $request->input('id');
        $user = User::find($id);
        $this->authorize('getUserInfo', $user);
        return $user;
    } */

    /**
     * Creates a new user.
     *
     * @return User The user created.
     */
    public function create(Request $request)
    {
        $person = new Person();
        $this->authorize('create', $person);
        $person->username = $request->input('username');
        $person->password = $request->input('password');

        $user = $person->create([
            'name' => $request->input('name'),
            'mail' => $request->input('mail'),
        ]);
        $user->name = $request->input('name');
        $user->user_id = Auth::user()->id;
        $user->save();

        return $user;
    }

    public function delete($id)
    {
        $user = User::find($id);

        $this->authorize('delete', $user);

        foreach ($user->comments()->get() as $comment){
            $comment->update(["deleted" => 'true']);
        }

        foreach ($user->posts()->get() as $post){
            $post->update(["banned" => 'true']);
        }

        Like::where('user_id', $id)->delete();

        $user->links()->detach();
        $user->reversedLinks()->detach();

        $user->groups()->wherePivot('user_id', '=', $user->id)->detach();

        Notification::where('user_id', $id)->delete();

        User::where('id', $id)->update(['deleted' => 'true']);

        return $user;
    }

    public function changeName(Request $request)
    {
        $user = Auth::user()->user;
        $this->authorize('changeName', $user);
        $user->name = $request->input('text');
        $user->save();

        return $user;
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user()->user;

        $this->authorize('changePassword', $user);

        Validator::make($request->all(), [
            'password' => 'required|string|min:6|confirmed',
            'old_pass' => 'required|string|min:6',
        ])->validate();

        if (Hash::check($request->input('old_pass'), $user->person->password)) {
            Log::debug("We are in here");
            $user->person->update(['password' => bcrypt($request->input('password'))]);
            $user->save();
            return $user;
        }
        return ['id' => false];
    }

    public function changePicture(Request $request)
    {
        $user = Auth::user()->user;

        $this->authorize('changePicture', $user);

        $request->file('picture')->move(public_path() . "/images/profile/", $user->id . ".png");

        return redirect('user/' + $user->id);
    }

    public function search(Request $request)
    {
        $users = DB::select('SELECT "user".* FROM "user" JOIN "person" ON "user"."id" = "person"."id" WHERE "user"."deleted"=false AND (UPPER("user"."name") LIKE UPPER(CONCAT(:search::text, \' % \')) OR UPPER("person"."username") LIKE UPPER(CONCAT(:search::text, \' % \')) OR to_tsvector("user"."name" || \' \' || "person"."username") @@ plainto_tsquery(:search))', ["search" => $request->input("search")]);

        $final = [];
        foreach ($users as $user) {
            array_push($final, User::find($user->id));
        }

        if (Auth::check()) {
            if (!Auth::user()->is_admin) {
                return view('pages.search_people', ['users' => $final, 'search' => $request->input("search")]);
            } else {
                $reports = Report::all()->sortByDesc('id')->take(20);
                return view('pages.search_people', ['users' => $final, 'reports' => $reports, 'search' => $request->input("search")]);
            }
        } else {
            return view('pages.search_people', ['users' => $final, 'search' => $request->input("search")]);
        }
    }

}
