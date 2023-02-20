@extends('frontend.layouts.app', ['nav' => 'yes'])


@push('style')
@endpush
@section('title')
{{ __('Shop') }}
@endsection
@section('content')
<div class="main_template">
    <div id="mySidenav" class="container-fluid sidenav sidebar_menu">
        <div class="shop_filter">
            <form action="#" method="post">
                <div class="filter_category mb-3">
                    <h5>Sub Categories</h5>
                    <div class="form-check">
                        <input class="form-check-input" name="subcategory" type="checkbox" value="" id="subcategory_1">
                        <label class="form-check-label" for="subcategory_1">
                            search titles only
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="subcategory" type="checkbox" value="" id="subcategory_2">
                        <label class="form-check-label" for="subcategory_2">
                            it has pictures
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="subcategory" type="checkbox" value="" id="subcategory_3">
                        <label class="form-check-label" for="subcategory_3">
                            posted today
                        </label>
                    </div>
                </div>
                <div class="filter_category mb-3">
                    <h5>offices and activities trade</h5>
                    <div class="form-check">
                        <input class="form-check-input" name="category" type="checkbox" value="" id="category_1">
                        <label class="form-check-label" for="category_1">
                            search titles only
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="category" type="checkbox" value="" id="category_2">
                        <label class="form-check-label" for="category_2">
                            it has pictures
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="category" type="checkbox" value="" id="category_3">
                        <label class="form-check-label" for="category_3">
                            posted today
                        </label>
                    </div>
                </div>
                <div class="filter_wrap mb-3">
                    <label for="" class="form-label">Price</label>
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" name="min_price" id="min_price" placeholder="Min"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" name="min_price" id="min_price" placeholder="Max"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter_wrap mb-3">
                    <label for="" class="form-label">FT</label>
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" name="min_price" id="min_price" placeholder="Min"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" name="min_price" id="min_price" placeholder="Max"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter_wrap availabililty_select mb-3">
                    <label for="" class="form-label">Availability</label>
                    <select name="availability" id="availability" class="form-control">
                        <option value="all dates">all dates</option>
                        <option value="30 days">in 30 days</option>
                        <option value="over 30 days">over 30 days</option>
                    </select>
                </div>
                <div class="filter_wrap mb-3">
                    <label for="" class="form-label">duration of the rental</label>
                    <div class="form-check">
                        <input class="form-check-input" name="duration" type="checkbox" value="" id="duration_1">
                        <label class="form-check-label" for="duration_1">
                            search titles only
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="duration" type="checkbox" value="" id="duration_2">
                        <label class="form-check-label" for="duration_2">
                            it has pictures
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="duration" type="checkbox" value="" id="duration_3">
                        <label class="form-check-label" for="duration_3">
                            posted today
                        </label>
                    </div>
                </div>
                <div class="filter_wrap mb-3">
                    <button type="button" class="reset">Reset</button>
                    <button type="submit" class="float-end">update search</button>
                </div>
            </form>
        </div>
    </div>

    <div id="main" class="margin_left">
        <div class="product_search mb-4">
            <form action="#" method="post">
                <span class="navbar_btn" onclick="openNav()">
                    <i class="las la-angle-double-left"></i>
                </span>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="input-group">
                            <input type="text" name="search" id="search" class="form-control" required>
                            <button type="submit" class="btn btn-primary"><i class="la la-search"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
            @foreach($ads as $key => $value)
            <div class="col mb-3">
                <div class="prodouct_wrap">
                    <div class="favorite">
                        <div class="form-check">
                            <input class="form-check-input" name="wishlist" type="checkbox" id="wishlist_{{ $value->id }}"
                            {{isWishlisted($value->id) ? 'checked':'' }}
                            onchange="AddWishlist2({{ $value->id }}, {{ Auth::user()->id ?? '' }})">
                            <label class="form-check-label" for="wishlist_{{ $value->id }}"></label>
                        </div>
                        <span>{{ date('d Y',strtotime($value->created_at)) }}</span>
                    </div>
                    <div class="product_img">
                        <a href="{{ route('frontend.details',$value->slug) }}"><img src="{{ asset($value->thumbnail) }}"
                                class="w-100" alt="image"></a>
                    </div>
                    <div class="product_content">
                        <h5>{{ $value->price }}</h5>
                        <h4><a href="{{ route('frontend.details',$value->slug) }}">{{ Str::limit($value->title, '32', '...') }}</a>
                        </h4>
                        <p>({{$value->city}} {{ isset($value->countries->name) ? ', ' .ucfirst(strtolower($value->countries->name)) : ''}})
                            {{-- <a href="javascript:void(0)"><i
                                    class="la la-times"></i></a></p> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- footer -->
    <footer class="text-center footer_menu">
        <div class="container">
            <div class="p-2">
                <ul>
                    <li class="list-item text-white"> © {{ date('Y') }} ffuts |</li>
                    <li><a href="{{ route('frontend.faq') }}">{{ __('faq') }} |</a></li>
                    <li><a href="{{ route('frontend.price.plan') }}">{{ __('price plan') }} |</a></li>
                    <li><a href="{{ route('frontend.search') }}">{{ __('shop') }} |</a></li>
                    <li><a href="{{ route('frontend.privacy.policy') }}">{{ __('privacy') }} |</a></li>
                    <li><a href="{{ route('frontend.terms.condition') }}">{{ __('terms & conditions') }} |</a>
                    </li>
                    <li><a href="{{ route('frontend.about') }}">{{ __('about') }} |</a></li>
                    <li><a href="{{ route('frontend.contact') }}">{{ __('contact') }} |</a></li>
                    <li><a href="sitemap.html">{{ __('sitemap') }} </a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
@endsection
@push('script')
<script>
    function openNav() {
            $('#mySidenav').toggleClass('sidebar_menu');
            $('#main').toggleClass('margin_left');
        }
</script>
@endpush
