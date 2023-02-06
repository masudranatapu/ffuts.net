@extends('frontend.layouts_two.app_two')

@section('meta')
@endsection

@push('style')
@endpush

@section('content')
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
        <div class="col mb-3">
            <div class="prodouct_wrap">
                <div class="favorite">
                    <div class="form-check">
                        <input class="form-check-input" name="wishlist" type="checkbox" id="wishlist_1">
                        <label class="form-check-label" for="wishlist_1"></label>
                    </div>
                    <span>Jan, 20</span>
                </div>
                <div class="product_img">
                    <a href="{{ route('details') }}"><img src="{{ asset('frontend/images/1.jpg') }}" class="w-100" alt="image"></a>
                </div>
                <div class="product_content">
                    <h5>$55.55</h5>
                    <h4><a href="{{ route('details') }}">Hotel Apartment for sale in the city center on an Upper
                            Floor</a>
                    </h4>
                    <p>(Jeruselam, City Center) <a href="javascript:void(0)"><i class="la la-times"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="prodouct_wrap">
                <div class="favorite">
                    <div class="form-check">
                        <input class="form-check-input" name="wishlist" type="checkbox" id="wishlist_2">
                        <label class="form-check-label" for="wishlist_2"></label>
                    </div>
                    <span>Jan, 20</span>
                </div>
                <div class="product_img">
                    <a href="{{ route('details') }}"><img src="{{ asset('frontend/images/2.jpg') }}" class="w-100" alt="image"></a>
                </div>
                <div class="product_content">
                    <h5>$55.55</h5>
                    <h4><a href="{{ route('details') }}">Hotel Apartment for sale in the city center on an Upper
                            Floor</a>
                    </h4>
                    <p>(Jeruselam, City Center) <a href="javascript:void(0)"><i class="la la-times"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="prodouct_wrap">
                <div class="favorite">
                    <div class="form-check">
                        <input class="form-check-input" name="wishlist" type="checkbox" id="wishlist_3">
                        <label class="form-check-label" for="wishlist_3"></label>
                    </div>
                    <span>Jan, 20</span>
                </div>
                <div class="product_img">
                    <a href="{{ route('details') }}"><img src="{{ asset('frontend/images/3.jpg') }}" class="w-100" alt="image"></a>
                </div>
                <div class="product_content">
                    <h5>$55.55</h5>
                    <h4><a href="{{ route('details') }}">Hotel Apartment for sale in the city center on an Upper
                            Floor</a>
                    </h4>
                    <p>(Jeruselam, City Center) <a href="javascript:void(0)"><i class="la la-times"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="prodouct_wrap">
                <div class="favorite">
                    <div class="form-check">
                        <input class="form-check-input" name="wishlist" type="checkbox" id="wishlist_4">
                        <label class="form-check-label" for="wishlist_4"></label>
                    </div>
                    <span>Jan, 20</span>
                </div>
                <div class="product_img">
                    <a href="{{ route('details') }}"><img src="{{ asset('frontend/images/1.jpg') }}" class="w-100" alt="image"></a>
                </div>
                <div class="product_content">
                    <h5>$55.55</h5>
                    <h4><a href="{{ route('details') }}">Hotel Apartment for sale in the city center on an Upper
                            Floor</a>
                    </h4>
                    <p>(Jeruselam, City Center) <a href="javascript:void(0)"><i class="la la-times"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="prodouct_wrap">
                <div class="favorite">
                    <div class="form-check">
                        <input class="form-check-input" name="wishlist" type="checkbox" id="wishlist_5">
                        <label class="form-check-label" for="wishlist_5"></label>
                    </div>
                    <span>Jan, 20</span>
                </div>
                <div class="product_img">
                    <a href="{{ route('details') }}"><img src="{{ asset('frontend/images/4.jpg') }}" class="w-100" alt="image"></a>
                </div>
                <div class="product_content">
                    <h5>$55.55</h5>
                    <h4><a href="{{ route('details') }}">Hotel Apartment for sale in the city center on an Upper
                            Floor</a>
                    </h4>
                    <p>(Jeruselam, City Center) <a href="javascript:void(0)"><i class="la la-times"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="prodouct_wrap">
                <div class="favorite">
                    <div class="form-check">
                        <input class="form-check-input" name="wishlist" type="checkbox" id="wishlist_6">
                        <label class="form-check-label" for="wishlist_6"></label>
                    </div>
                    <span>Jan, 20</span>
                </div>
                <div class="product_img">
                    <a href="{{ route('details') }}"><img src="{{ asset('frontend/images/3.jpg') }}" class="w-100" alt="image"></a>
                </div>
                <div class="product_content">
                    <h5>$55.55</h5>
                    <h4><a href="{{ route('details') }}">Hotel Apartment for sale in the city center on an Upper
                            Floor</a>
                    </h4>
                    <p>(Jeruselam, City Center) <a href="javascript:void(0)"><i class="la la-times"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="prodouct_wrap">
                <div class="favorite">
                    <div class="form-check">
                        <input class="form-check-input" name="wishlist" type="checkbox" id="wishlist_7">
                        <label class="form-check-label" for="wishlist_7"></label>
                    </div>
                    <span>Jan, 20</span>
                </div>
                <div class="product_img">
                    <a href="{{ route('details') }}"><img src="{{ asset('frontend/images/2.jpg') }}" class="w-100" alt="image"></a>
                </div>
                <div class="product_content">
                    <h5>$55.55</h5>
                    <h4><a href="{{ route('details') }}">Hotel Apartment for sale in the city center on an Upper
                            Floor</a>
                    </h4>
                    <p>(Jeruselam, City Center) <a href="javascript:void(0)"><i class="la la-times"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="prodouct_wrap">
                <div class="favorite">
                    <div class="form-check">
                        <input class="form-check-input" name="wishlist" type="checkbox" id="wishlist_8">
                        <label class="form-check-label" for="wishlist_8"></label>
                    </div>
                    <span>Jan, 20</span>
                </div>
                <div class="product_img">
                    <a href="{{ route('details') }}"><img src="{{ asset('frontend/images/1.jpg') }}" class="w-100" alt="image"></a>
                </div>
                <div class="product_content">
                    <h5>$55.55</h5>
                    <h4><a href="{{ route('details') }}">Hotel Apartment for sale in the city center on an Upper
                            Floor</a>
                    </h4>
                    <p>(Jeruselam, City Center) <a href="javascript:void(0)"><i class="la la-times"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="prodouct_wrap">
                <div class="favorite">
                    <div class="form-check">
                        <input class="form-check-input" name="wishlist" type="checkbox" id="wishlist_9">
                        <label class="form-check-label" for="wishlist_9"></label>
                    </div>
                    <span>Jan, 20</span>
                </div>
                <div class="product_img">
                    <a href="{{ route('details') }}"><img src="{{ asset('frontend/images/2.jpg') }}" class="w-100" alt="image"></a>
                </div>
                <div class="product_content">
                    <h5>$55.55</h5>
                    <h4><a href="{{ route('details') }}">Hotel Apartment for sale in the city center on an Upper
                            Floor</a>
                    </h4>
                    <p>(Jeruselam, City Center) <a href="javascript:void(0)"><i class="la la-times"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="prodouct_wrap">
                <div class="favorite">
                    <div class="form-check">
                        <input class="form-check-input" name="wishlist" type="checkbox" id="wishlist_10">
                        <label class="form-check-label" for="wishlist_10"></label>
                    </div>
                    <span>Jan, 20</span>
                </div>
                <div class="product_img">
                    <a href="{{ route('details') }}"><img src="{{ asset('frontend/images/3.jpg') }}" class="w-100" alt="image"></a>
                </div>
                <div class="product_content">
                    <h5>$55.55</h5>
                    <h4><a href="{{ route('details') }}">Hotel Apartment for sale in the city center on an Upper
                            Floor</a>
                    </h4>
                    <p>(Jeruselam, City Center) <a href="javascript:void(0)"><i class="la la-times"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="prodouct_wrap">
                <div class="favorite">
                    <div class="form-check">
                        <input class="form-check-input" name="wishlist" type="checkbox" id="wishlist_11">
                        <label class="form-check-label" for="wishlist_11"></label>
                    </div>
                    <span>Jan, 20</span>
                </div>
                <div class="product_img">
                    <a href="{{ route('details') }}"><img src="{{ asset('frontend/images/4.jpg') }}" class="w-100" alt="image"></a>
                </div>
                <div class="product_content">
                    <h5>$55.55</h5>
                    <h4><a href="{{ route('details') }}">Hotel Apartment for sale in the city center on an Upper
                            Floor</a>
                    </h4>
                    <p>(Jeruselam, City Center) <a href="javascript:void(0)"><i class="la la-times"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="prodouct_wrap">
                <div class="favorite">
                    <div class="form-check">
                        <input class="form-check-input" name="wishlist" type="checkbox" id="wishlist_12">
                        <label class="form-check-label" for="wishlist_12"></label>
                    </div>
                    <span>Jan, 20</span>
                </div>
                <div class="product_img">
                    <a href="{{ route('details') }}"><img src="{{ asset('frontend/images/2.jpg') }}" class="w-100" alt="image"></a>
                </div>
                <div class="product_content">
                    <h5>$55.55</h5>
                    <h4><a href="{{ route('details') }}">Hotel Apartment for sale in the city center on an Upper
                            Floor</a>
                    </h4>
                    <p>(Jeruselam, City Center) <a href="javascript:void(0)"><i class="la la-times"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="prodouct_wrap">
                <div class="favorite">
                    <div class="form-check">
                        <input class="form-check-input" name="wishlist" type="checkbox" id="wishlist_13">
                        <label class="form-check-label" for="wishlist_13"></label>
                    </div>
                    <span>Jan, 20</span>
                </div>
                <div class="product_img">
                    <a href="{{ route('details') }}"><img src="{{ asset('frontend/images/4.jpg') }}" class="w-100" alt="image"></a>
                </div>
                <div class="product_content">
                    <h5>$55.55</h5>
                    <h4><a href="{{ route('details') }}">Hotel Apartment for sale in the city center on an Upper
                            Floor</a>
                    </h4>
                    <p>(Jeruselam, City Center) <a href="javascript:void(0)"><i class="la la-times"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="prodouct_wrap">
                <div class="favorite">
                    <div class="form-check">
                        <input class="form-check-input" name="wishlist" type="checkbox" id="wishlist_14">
                        <label class="form-check-label" for="wishlist_14"></label>
                    </div>
                    <span>Jan, 20</span>
                </div>
                <div class="product_img">
                    <a href="{{ route('details') }}"><img src="{{ asset('frontend/images/3.jpg') }}" class="w-100" alt="image"></a>
                </div>
                <div class="product_content">
                    <h5>$55.55</h5>
                    <h4><a href="{{ route('details') }}">Hotel Apartment for sale in the city center on an Upper
                            Floor</a>
                    </h4>
                    <p>(Jeruselam, City Center) <a href="javascript:void(0)"><i class="la la-times"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="prodouct_wrap">
                <div class="favorite">
                    <div class="form-check">
                        <input class="form-check-input" name="wishlist" type="checkbox" id="wishlist_14">
                        <label class="form-check-label" for="wishlist_14"></label>
                    </div>
                    <span>Jan, 20</span>
                </div>
                <div class="product_img">
                    <a href="{{ route('details') }}"><img src="{{ asset('frontend/images/1.jpg') }}" class="w-100" alt="image"></a>
                </div>
                <div class="product_content">
                    <h5>$55.55</h5>
                    <h4><a href="{{ route('details') }}">Hotel Apartment for sale in the city center on an Upper
                            Floor</a>
                    </h4>
                    <p>(Jeruselam, City Center) <a href="javascript:void(0)"><i class="la la-times"></i></a>
                    </p>
                </div>
            </div>
        </div>
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
