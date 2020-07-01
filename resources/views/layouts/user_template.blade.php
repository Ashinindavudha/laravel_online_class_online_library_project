
@include('layouts.head')
@yield('style')
<body class="homepage-v4 hidden-sn animated">

    <!--Navigation-->
    @include('layouts.header')
        <!--Blog section-->
        @yield('content')
    </main>
    <!--Main layout-->

    <!--Footer-->
    @include('layouts.footer')

    @yield('scripts')