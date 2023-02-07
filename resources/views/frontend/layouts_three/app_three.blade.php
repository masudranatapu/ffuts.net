<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    {{-- meta --}}
    @yield('meta')
    {{-- style --}}
    @include('frontend.layouts_three.head')
    {{-- custom style --}}
    @stack('style')
</head>

<body>
    {{-- header --}}
    <header class="header sticky-top">
        @include('frontend.layouts_three.header')
    </header>
    {{-- maiin section --}}
    <div class="main_template">
        <div class="container">
            @yield('content')
        </div>
        <!-- footer -->
        <footer class="text-center footer_menu">
            <div class="container">
                @include('frontend.layouts_one.partial.footer')
            </div>
        </footer>
    </div>
    {{-- script --}}
    @include('frontend.layouts_three.foot')
    {{-- custom script --}}
    @stack('script')
</body>

</html>