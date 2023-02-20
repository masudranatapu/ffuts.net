<div class="container-fluid">
    <div class="row g-1">
        <div class="col-lg-9">
            @if (Route::is('frontend.search'))
                <form action="{{ route('frontend.search') }}" method="get">
                    <a class="header_logo" name="logoLink" href="{{ route('frontend.index') }}">CL</a>
                    <div class="d-inline">
                        <select name="country" id="country" class="select2">
                            @foreach ($countries as $country)
                                <option value="{{ strtolower($country->iso) }}">
                                    {{ ucfirst(strtolower($country->name)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-inline">
                        <select name="ad_type" id="ad_type" class="select2">
                            @foreach ($ad_types as $ad_type)
                            <option value="{{ $ad_type->slug }}">{{ $ad_type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- @dd(request()->ad_type) --}}
                    <div class="d-inline">
                        <select name="category" id="category" class="select2">
                            <option value="">Bangladesh</option>
                            <option value="">India</option>
                            <option value="">Pakistan</option>
                            <option value="">China</option>
                            <option value="">Jerusalem</option>
                        </select>
                    </div>
                </form>
            @else
                <a class="header_logo" name="logoLink" href="{{ route('frontend.index') }}">CL</a>
                <div class="breadcrumb">
                    @yield('breadcrumb')
                </div>
            @endif
        </div>
        <div class="col-lg-3">
            <div class="header_end float-lg-end">
                <ul id="wishlist_count">
                    @if (auth()->guard('user')->check() && userWishlist() > 0)
                        <li><a href="javascript:;" class="badge text-bg-warning">
                                <i class="las la-star"></i> {{ userWishlist() }}
                                {{ userWishlist() > 1 ? 'favourites' : 'favourite' }}</a>
                        </li>
                    @endif
                    {{-- <li>
                        <a href="javascript:;" class="badge text-bg-danger">
                            <i class="las la-times-circle"></i> 2
                            hidden
                        </a>
                    </li> --}}
                    <li><a href="{{ route('frontend.post.create') }}">post</a></li>
                    @if (auth('user')->check())
                        <li><a href="{{ route('user.profile') }}">account</a></li>
                    @else
                        <li><a href="{{ route('signin') }}">account</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
