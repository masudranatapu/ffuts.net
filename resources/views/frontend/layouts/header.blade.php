<div class="container-fluid">
    <div class="row g-1">
        <div class="col-lg-9">
            @if (Route::is('frontend.search'))
                @php
                    $ad_type = DB::table('ad_types')
                        ->where('slug', request()->category)
                        ->first();
                        if (isset($ad_type)) {
                            $old_cats = $categories->where('ad_type_id', $ad_type->id);
                        }
                @endphp
                <form action="{{ route('frontend.search') }}" method="get" id="searchForm">
                    <a class="header_logo" name="logoLink" href="{{ route('frontend.index') }}">ffutS</a>
                    <div class="d-inline">
                        <select name="country" id="country" class="select2" onchange="serachSubmit()">
                            <option value="" disabled selected>Country</option>
                            @foreach ($countries as $country)
                                <option value="{{ strtolower($country->iso) }}"
                                    {{ request()->country ==  strtolower($country->iso) ? 'selected':'' }} >
                                    {{ ucfirst(strtolower($country->name)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-inline">
                        <select name="ad_type" id="ad_type" class="select2" onchange="serachSubmit()">
                            <option value="">All</option>
                            @if(isset($categories) && count($categories)>0)
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->slug }}" {{ request()->category ==  $cat->slug ? 'selected':'' }}>{{ $cat->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="d-inline">
                        <select name="category" id="category" class="select2" onchange="serachSubmit()">
                            <option value="" >All</option>

                                @foreach ($subcategories as $scat)
                                    <option value="{{ $scat->slug }}" {{ request()->subcategory ==  $scat->slug ? 'selected':'' }}>{{ $scat->name }}</option>
                                @endforeach

                        </select>
                    </div>
                </form>
            @else
                <a class="header_logo" name="logoLink" href="{{ route('frontend.index') }}">ffutS</a>
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
