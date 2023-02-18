@extends('frontend.layouts.app', ['nav' => 'yes'])

@section('meta')
    <meta property="title" content="{{ $meta_title }}" />
    <meta property="description" content="{{ $meta_description }}" />
    <meta property="keywords" content="{{ $meta_keywords }}" />
    <meta property="og:title" content="{{ $meta_title }}" />
    <meta property="og:description" content="{{ $meta_description }}" />
    <meta property="og:keywords" content="{{ $meta_keywords }}" />
    <meta property="og:image" content="{{ asset($meta_image) }}" />
@endsection

@push('script')
@endpush
@section('title')
    {{ __('Details') }}
@endsection
@section('breadcrumb')
    <ul>
        <li><a href="#">{{ config('app.name') }} ></a></li>
        <li><a href="#">{{ $ad_details->ad_type->slug }} ></a></li>
        <li><a href="#">{{ $ad_details->category->slug }}</a></li>
    </ul>
@endsection

@section('content')
    <div class="main_template">
        <div class="container">
            <div class="single_product mt-5 mb-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-9">
                        <div class="single_pro_content mb-2">
                            <div class="product_info mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" name="wishlist" type="checkbox"
                                        id="wishlist2_{{ $ad_details->id }}"
                                        onchange="AddWishlist2({{ $ad_details->id }}, {{ Auth::user()->id ?? '' }})">
                                    <label class="form-check-label" for="wishlist2_{{ $ad_details->id }}">favorite</label>
                                </div>
                                <div class="form-check hide_collection">
                                    <input class="form-check-input" name="hide_collection" type="checkbox" id="hide_1">
                                    <label class="form-check-label" for="hide_1">hide</label>
                                </div>
                                <div class="form-check flag_mark">
                                    <input class="form-check-input" name="flag_mark" type="checkbox" id="flag_1">
                                    <label class="form-check-label" for="flag_1">mark with <br /> flags</label>
                                </div>
                                <span class="float-end">Posted {{ $ad_details->created_at->diffForHumans() }}</span>
                            </div>
                            <h3>{{ $ad_details->title }}</h3>
                        </div>
                        <!-- gallery -->
                        <div class="product-item__gallery mb-4">
                            <div class="swiper mySwiper2">
                                <div class="swiper-wrapper single_item">
                                    @foreach ($ad_galleies as $key => $value)
                                        <div class="swiper-slide">
                                            <img src="{{ asset($value->image) }}" alt="{{ $value->name }}" />
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>

                            <div thumbsSlider="" class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    @foreach ($ad_galleies as $key => $value)
                                        <div class="swiper-slide">
                                            <img src="{{ asset($value->image) }}" alt="{{ $value->name }}" />
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- details -->
                        <div class="details">
                            @if($ad_details->ad_type->slug == 'job-offered')
                                <ul class="mb-4">
                                    <li>Price: <strong>${{ $ad_details->price }}</strong></li>
                                    <li>Rental Term: <strong>Monthly</strong></li>
                                </ul>
                                <ul class="mb-4">
                                    <li>Contact Name: <strong>{{ $ad_details->contact_name }}</strong></li>
                                    <li>Company Name: <strong>{{ $ad_details->company_name }}</strong></li>
                                </ul>
                                <ul class="mb-4">
                                    <li>Salary: <strong>{{ $ad_details->salary }}</strong></li>
                                    <li>Job Title: <strong>{{ $ad_details->job_title }}</strong></li>
                                </ul>
                             @endif
                            <ul class="mb-4">
                                <li>Job For Disabilities: <strong>{{ $ad_details->job_for_disabilities }}</strong></li>
                                <li>Phone Text: <strong>{{ $ad_details->phone_text }}</strong></li>
                            </ul>
                            
                            <ul class="mb-4">
                                <li>Employment Type: <strong>{{ $ad_details->employment_type }}</strong></li>
                                <li>Email Privacy: <strong>{{ $ad_details->email_privacy }}</strong></li>
                            </ul>
                            <ul class="mb-4">
                                <li>Availability: <strong>{{ $ad_details->availability }}</strong></li>
                                <li>education: <strong>{{ $ad_details->education }}</strong></li>
                            </ul>
                            <ul class="mb-4">
                                <li>Is license: <strong>{{ $ad_details->is_license }}</strong></li>
                                <li>License Info: <strong>{{ $ad_details->license_info }}</strong></li>
                            </ul>
                            <ul class="mb-4">
                                <li>Other Contact: <strong>{{ $ad_details->other_contact }}</strong></li>
                                <li>Phone Call: <strong>{{ $ad_details->phone_call }}</strong></li>
                            </ul>
                            <ul class="mb-4">
                                <li>City: <strong>{{ $ad_details->city }}</strong></li>
                                {{-- @dd($ad_details->services) --}}
                                <li>Services: 
                                    @foreach ($ad_details->services as $value)
                                     <span class="badge rounded-pill bg-success">{{ $value }}</span>
                                    @endforeach
                                </li>
                            </ul>
                            <ul class="mb-4">
                                <li>Sqft: <strong>{{ $ad_details->sqft }}</strong></li>
                                <li>Houssing Type: <strong>{{ $ad_details->houssing_type }}</strong></li>
                            </ul>
                            <ul class="mb-4">
                                <li>Laundry: <strong>{{ $ad_details->laundry }}</strong></li>
                                <li>Parking: <strong>{{ $ad_details->parking }}</strong></li>
                            </ul>
                            <ul class="mb-4">
                                <li>Bedrooms: <strong>{{ $ad_details->bedrooms }}</strong></li>
                                <li>Bathrooms: <strong>{{ $ad_details->bathrooms }}</strong></li>
                                <li>Available On: <strong>{{ $ad_details->available_on }}</strong></li>
                            </ul>
                            <p>{{ $ad_details->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer class="text-center footer_menu">
            <div class="container">
                <div class="p-2">
                    <ul>
                        <li class="list-item text-white"> © {{ date('Y') }} ffuts |</li>
                        <li><a href="{{ route('privacy.policy') }}">{{ __('privacy') }} |</a></li>
                        <li><a href="{{ route('terms.condition') }}">{{ __('terms & conditions') }} |</a></li>
                        <li><a href="{{ route('about') }}">{{ __('about') }} |</a></li>
                        <li><a href="sitemap.html">{{ __('sitemap') }} </a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
@endsection

@push('script')
    <script>
        "use strict";
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 12,
            freeMode: true,
            watchSlidesProgress: true,
            breakpoints: {

                1024: {
                    slidesPerView: 6,
                },
                1: {
                    slidesPerView: 3,
                },
            },
        });

        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>
    <script>
        function AddWishlist2(item, user) {

            if (user) {
                $.ajax({
                    type: "get",
                    url: "{{ route('wishlist.create') }}",
                    data: {
                        id: item,
                        user: user,
                    },
                    success: function(data) {
                        // location.reload()
                    }
                });
            } else {
                // $(id).prop('checked', false)
                toastr.error('Please login first');
            }
        }
    </script>
@endpush
