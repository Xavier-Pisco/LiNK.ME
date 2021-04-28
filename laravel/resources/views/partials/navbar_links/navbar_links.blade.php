@if (Auth::check())
    @if (Auth::user()->person()->is_admin == true)
        @include('partial.navbar_links.admin_links')
    @else
        @include('partial.navbar_links.normal_links')    
    @endif    
@endif