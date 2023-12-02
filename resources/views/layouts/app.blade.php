@include('layouts.frame.head')

<body>

    <div id="app">
        @auth
            @include('layouts.navbar.guest.topnav')
            <main class="py-4">
                @yield('content')
            </main>
        @endauth

        @guest
            @include('layouts.navbar.guest.topnav')
            <main class="py-4">
                @yield('content')
            </main>
        @endguest
    </div>

    @include('layouts.frame.foot')
</body>

</html>
