<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('frontend/images/favicon.png') }}">
    {{-- meta --}}
    @yield('meta')
    {{-- style --}}
    @include('frontend.layouts_one.partial.head')
    <!-- for css input -->
    @stack('style')
</head>

<body>
    <div class="template_wrap mt-1 d-none d-md-block">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-3">
                    <div class="sidebar_left overflow-hidden">
                        @include('frontend.layouts_one.partial.sidebar_left')
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="heading2 text-center py-3">
                        <h5>
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('frontend/images/logo.png') }}" width="150" alt="logo">
                            </a>
                        </h5>
                    </div>
                    <div class="main_body">
                        @yield('content')
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="sidebar_right">
                        @include('frontend.layouts_one.partial.sidebar_right')
                    </div>
                </div>
            </div>
            <footer class="text-center footer_menu">
                <div class="container">
                    @include('frontend.layouts_one.partial.footer')
                </div>
            </footer>
        </div>
    </div>
    {{-- mobile view --}}
    <div class="mobile-view d-block d-md-none">
        <div class="mobile_header">
            @include('frontend.layouts_one.partial.mobile_header')
        </div>
        <div class="container">
            <div class="mobile_body">
                @yield('mobile_content')
            </div>
        </div>
        <footer class="text-center footer_menu">
            <div class="container">
                @include('frontend.layouts_one.partial.footer')
            </div>
        </footer>
    </div>
    {{-- script --}}
    @include('frontend.layouts_one.partial.foot')
    <!-- for css input -->
    @stack('script')
</body>

</html>
