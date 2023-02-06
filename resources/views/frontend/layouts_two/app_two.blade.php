<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop</title>
        {{-- meta  --}}
        @yield('meta')
        {{-- style --}}
        @include('frontend.layouts_one.partial.head')
        <!-- for css input -->
        @stack('style')
    </head>
    <body>
        {{-- header --}}
        <header class="header sticky-top">
            @include('frontend.layouts_two.partial.header')
        </header>
        {{-- main template --}}
        <div class="main_template">
            <div id="mySidenav" class="container-fluid sidenav sidebar_menu">
                @include('frontend.layouts_two.partial.filter')
            </div>
            <div id="main" class="margin_left">
                @yield('content')
            </div>
            {{-- footer --}}
            <footer class="text-center footer_menu">
                <div class="container">
                    @include('frontend.layouts_one.partial.footer')
                </div>
            </footer>
        </div>
        {{-- foot  --}}
        @include('frontend.layouts_one.partial.foot')
        {{-- for css input --}}
        @stack('script')
    </body>
</html>
