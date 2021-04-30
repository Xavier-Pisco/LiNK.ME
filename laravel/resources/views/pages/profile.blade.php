@extends('layouts.app')

@push('css_links')
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/mobile.css') }}" />
<link rel="stylesheet" href="{{ asset('css/post.css') }}" />
<link rel="stylesheet" href="{{ asset('css/left_col.css') }}" />
<link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
@endpush

@section('content')
@if (Auth::user()->user == $user)
    {{-- @include("partials.profile.myprofile") --}}
@else
    {{-- @include("partials.profile.otherprofile") --}}
@endif
@endsection
