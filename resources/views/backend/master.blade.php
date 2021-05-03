

@include('backend.layouts.header')
@include('backend.layouts.topbar')
@include('backend.layouts.rightsidebar')




<div class="mobile-menu-overlay"></div>


<div class="main-container">



    @yield('start')







    @yield('content')
</div>


@include('backend.layouts.leftsidebar')
@include('backend.layouts.footer')
