<div class="container-fluid">
    <div class="row g-1">
        <div class="col-lg-7">
            <a class="header_logo" name="logoLink" href="{{ route('index') }}">CL</a>
            <div class="breadcrumb">
                @yield('breadcrumb')
            </div>
        </div>

        @if (Route::is('about') || Route::is('terms.condition') || Route::is('privacy.policy'))

        @else
        <div class="col-lg-5">
            <div class="header_end float-lg-end">
                <ul>
                    <li><a href="#" class="badge text-bg-warning"><i class="las la-star"></i> 2 favourites</a>
                    </li>
                    <li>
                        <a href="#" class="badge text-bg-danger"><i class="las la-times-circle"></i> 2
                            hidden
                        </a>
                    </li>
                    <li><a href="{{ route('post.step.one') }}">{{ __('post') }}</a></li>
                    <li><a href="{{ route('signin') }}">account</a></li>
                </ul>
            </div>
        </div>
        @endif

    </div>
</div>