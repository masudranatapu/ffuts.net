<div class="container">
    <div class="row align-items-center">
        <div class="col-5">
            <div class="mobile_heade_left">
                <div class="site_logo">
                    <a class="header_logo" name="logoLink" href="{{ route('index') }}">CL</a>
                    <a href="{{ route('index') }}">Jerusalem</a>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="mobile_heade_right float-end">
                <ul>
                    <li><a href="{{ route('post.step.one') }}">{{ __('post') }}</a></li>
                    @if(auth('user')->check())
                        <a href="{{ route('user.profile') }}">My Account</a>
                    @else
                        <a href="{{ route('signin') }}">My Account</a>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
