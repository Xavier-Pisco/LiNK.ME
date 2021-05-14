<div class="container-fluid">
    <div class="row">
        <div class="col-2 text-center collapse" id="left-col">
            <div class="feed-change">
                <div id="feed-order">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="feedOrder" id="feedOrderRelevance">
                            Relevance
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="feedOrder" id="feedOrderRecent" checked>
                            Recent
                        </label>
                    </div>
                </div>
            </div>
            <!--
            <div id="notifications">
                <div id="notifications-title">
                    <p class="text-center">Notifications</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                    </svg>
                </div>
                <div class="card bg-dark border-secondary container-fluid">
                    <div class="row">
                        <div class="card-body col-8">
                            @JLopes has sent you a friend request
                        </div>
                        <div class="notification-friend-request col-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="card bg-dark border-secondary container-fluid">
                    <div class="row">
                        <div class="card-body col-8">
                            You have new comments in a post
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="col-4 bi bi-arrow-up-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 10.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z" />
                        </svg>
                    </div>
                </div>
            </div> // TODO Put notifications here
            -->
            <!--
            <div class="person-friends">
                <div class="post-header person-friends-header">
                    <div class="col-1">
                        <a href="./other_profile.php">
                            <img src="./images/jlopes.png" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
                        </a>
                    </div>
                    <div class="post-name col-6">
                        <a href="./other_profile.php">
                            <span id="name-tag" class="person-friends-name-tag"> @JLopes </span>
                        </a>
                    </div>
                </div>
                <div class="post-header person-friends-header">
                    <div class="col-1">
                        <a href="./other_profile.php">
                            <img src="./images/lizandroSilva.png" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
                        </a>
                    </div>
                    <div class="post-name col-6">
                        <a href="./other_profile.php">
                            <span id="name-tag" class="person-friends-name-tag"> @Lizaaandro </span>
                        </a>
                    </div>
                </div>
                <div class="post-header person-friends-header">
                    <div class="col-1">
                        <a href="./other_profile.php">
                            <img src="./images/xavierMontanelas.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
                        </a>
                    </div>
                    <div class="post-name col-6">
                        <a href="./other_profile.php">
                            <span id="name-tag" class="person-friends-name-tag"> @XM </span>
                        </a>
                    </div>
                </div>
                <div class="post-header person-friends-header">
                    <div class="col-1">
                        <a href="./other_profile.php">
                            <img src="./images/maria.png" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
                        </a>
                    </div>
                    <div class="post-name col-6">
                        <a href="./other_profile.php">
                            <span id="name-tag" class="person-friends-name-tag"> @Maria </span>
                        </a>
                    </div>
                </div>
                <div class="post-header person-friends-header">
                    <div class="col-1">
                        <a href="./other_profile.php">
                            <img src="./images/xavierLopes.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
                        </a>
                    </div>
                    <div class="post-name col-6">
                        <a href="./other_profile.php">
                            <span id="name-tag" class="person-friends-name-tag"> @XLopes </span>
                        </a>
                    </div>
                </div>
                <div class="post-header person-friends-header">
                    <div class="col-1">
                        <a href="./other_profile.php">
                            <img src="./images/xicoXavier.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
                        </a>
                    </div>
                    <div class="post-name col-6">
                        <a href="./other_profile.php">
                            <span id="name-tag" class="person-friends-name-tag"> @Xico </span>
                        </a>
                    </div>
                </div>
                <div class="post-header person-friends-header">
                    <div class="col-1">
                        <a href="./other_profile.php">
                            <img src="./images/xicoXavier.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
                        </a>
                    </div>
                    <div class="post-name col-6">
                        <a href="./other_profile.php">
                            <span id="name-tag" class="person-friends-name-tag"> @Xico </span>
                        </a>
                    </div>
                </div>
                <div class="post-header person-friends-header">
                    <div class="col-1">
                        <a href="./other_profile.php">
                            <img src="./images/xicoXavier.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
                        </a>
                    </div>
                    <div class="post-name col-6">
                        <a href="./other_profile.php">
                            <span id="name-tag" class="person-friends-name-tag"> @Xico </span>
                        </a>
                    </div>
                </div>
                <div class="post-header person-friends-header">
                    <div class="col-1">
                        <a href="./other_profile.php">
                            <img src="./images/xicoXavier.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
                        </a>
                    </div>
                    <div class="post-name col-6">
                        <a href="./other_profile.php">
                            <span id="name-tag" class="person-friends-name-tag"> @Xico </span>
                        </a>
                    </div>
                </div>
                <div class="post-header person-friends-header">
                    <div class="col-1">
                        <a href="./other_profile.php">
                            <img src="./images/xicoXavier.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
                        </a>
                    </div>
                    <div class="post-name col-6">
                        <a href="./other_profile.php">
                            <span id="name-tag" class="person-friends-name-tag"> @Xico </span>
                        </a>
                    </div>
                </div>
                <div class="post-header person-friends-header">
                    <div class="col-1">
                        <a href="./other_profile.php">
                            <img src="./images/xicoXavier.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
                        </a>
                    </div>
                    <div class="post-name col-6">
                        <a href="./other_profile.php">
                            <span id="name-tag" class="person-friends-name-tag"> @Xico </span>
                        </a>
                    </div>
                </div>
                <div class="post-header person-friends-header">
                    <div class="col-1">
                        <a href="./other_profile.php">
                            <img src="./images/xicoXavier.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
                        </a>
                    </div>
                    <div class="post-name col-6">
                        <a href="./other_profile.php">
                            <span id="name-tag" class="person-friends-name-tag"> @Xico </span>
                        </a>
                    </div>
                </div>
                <div class="post-header person-friends-header">
                    <div class="col-1">
                        <a href="./other_profile.php">
                            <img src="./images/xicoXavier.jpg" class="rounded-circle person-friends-profile-pic" alt="Profile picture">
                        </a>
                    </div>
                    <div class="post-name col-6">
                        <a href="./other_profile.php">
                            <span id="name-tag" class="person-friends-name-tag"> @Xico </span>
                        </a>
                    </div>
                </div>
            </div> // TODO Add friends scrollable
            -->
            <div id="groups">
                @php
                    $groups = Auth::user()->user->groups;
                @endphp
                @if (count($groups) > 0)
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @for ($i = 0; $i < count($groups); $i++)
                                @if ($i % 2 == 0)
                                    @if ($i == 0)
                                        <div class="carousel-item active">
                                    @else
                                        <div class="carousel-item">
                                    @endif
                                @endif
                                @include('partials.group_carousel', ['group' => $groups[$i]])
                                @if ($i % 2 == 1)
                                    </div>
                                @endif
                            @endfor
                            @if (count($groups) % 2 == 1)
                                </div>
                            @endif
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="false"></span>
                            <span class="visually-hidden">Next</span>
                    </div>
                @endif
                <a href="{{ route('create_group') }}" type="button" id="create-group-button" class="btn btn-dark">Create Group</a>
            </div>
            <div>
                <a href="./about.php" class="link-light">About</a>
                <span class="link-light"> | </span>
                <a href="./faq.php" class="link-light">FAQ</a>
            </div>
            <div>
                <a href="#" class="link-danger">Delete account</a>
            </div>
        </div>
        <div class="col-8">
            <div id="center-col">
                @include('partials.user_info')
                @php
                use App\Models\Post;
                    $posts = Post::all()->where('banned', '=', false);
                @endphp
                @foreach ($posts as $post)
                    @if($post->user->id == Auth::user()->user->id)
                        @include('partials.post', ['post' => $post, 'comments' => $post->comments])
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<div id="add-post-icon" class="add-post-icon">
    <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="125" height="125" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
        </svg>
    </a>
</div>
