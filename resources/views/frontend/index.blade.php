@extends('frontend.layouts.app', ['nav' => 'no'])

@section('meta')
    <meta property="title" content="{{ $meta_title }}" />
    <meta property="description" content="{{ $meta_description }}" />
    <meta property="keywords" content="{{ $meta_keywords }}" />
    <meta property="og:title" content="{{ $meta_title }}" />
    <meta property="og:description" content="{{ $meta_description }}" />
    <meta property="og:keywords" content="{{ $meta_keywords }}" />
    <meta property="og:image" content="{{ asset($meta_image) }}" />
@endsection

@push('style')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@section('title')
    {{ config('app.name') }}
@endsection
@php
    $country = getCountryCode();
    // dd($country);
@endphp

@section('content')
    <div class="template_wrap mt-1 d-none d-md-block">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-3">
                    <div class="sidebar_left overflow-hidden">
                        <div class="heading1 text-center p-3">
                            <h5><a href="{{ route('frontend.index') }}"><img src="{{ asset('frontend/images/logo.png') }}"
                                        width="124" alt="logo"></a>
                            </h5>
                            <ul class="list-group pt-3">
                                <li class="custom-list-style mb-2">
                                    <a href="{{ route('frontend.post.create') }}">Create a posting</a>
                                </li>
                                @if (auth('user')->check())
                                    <li class="mt-1 mb-3">
                                        <a href="{{ route('user.profile') }}">My Account</a>
                                    </li>
                                @else
                                    <li class="mt-1 mb-3">
                                        <a href="{{ route('signin') }}">My Account</a>
                                    </li>
                                @endif
                            </ul>
                            <div class="search-style mb-4">
                                <form action="{{ route('frontend.search') }}" method="get">
                                    <div class="input-group">
                                        <input type="text" name="search" id="search" class="form-control"
                                            placeholder="Search..." required>
                                        <button type="submit" class="text-input-group"><i
                                                class="la la-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="custom-calender mb-3">
                                <h5><a href="javascript:;">Event Calendar</a></h5>
                            </div>
                            <div class="calender-style">
                                <div id="datepicker"></div>
                            </div>
                            <div class="mt-5 list-style1 mb-3">
                                <ul class="list-group">
                                    @foreach($ads as $key => $value)
                                        <li class="list-item custom-list-style1">
                                            <a href="{{ route('frontend.details',$value->slug) }}">{{ $value->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="heading2 text-center py-3">
                        <h5><a href="{{ route('frontend.index') }}">Ffuts.net</a></h5>
                    </div>
                    <div class="main_body">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    @foreach ($categories as $key => $item)
                                    @if (!in_array($item->id, ['10','14','15']))
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="category_heading text-center">
                                                    <h5>
                                                        <a href="{{ route('frontend.search', ['country' => $country, 'category' => $item->slug]) }}">
                                                        {{ __($item->slug) }}</a>
                                                    </h5>
                                                </div>
                                                <div class="row g-1">
                                                    @foreach ($item->subcategories as $scat)
                                                        <div class="@if($item->id == 8 ) col-md-6 @elseif($item->id == 9) col-md-12  @elseif($item->id == 11) col-md-6  @elseif($item->id == 12) col-md-6  @elseif($item->id == 13) col-md-4 @else col-md-12 @endif  ">
                                                            <div class="mt-1">
                                                                <ul class="list-group category_list">
                                                                    <li><a href="{{ route('frontend.search', ['country' => $country, 'category' => $item->slug,'subcategory' => $scat->slug]) }}">{{ __($scat->name) }}</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="row">
                                    @foreach ($categories as $key => $item)
                                    @if (in_array($item->id, ['10','14','15']))
                                            <div class="col-md-12 mb-2">
                                                <div class="category_heading text-center">
                                                    <h5>
                                                        <a href="{{ route('frontend.search', ['country' => $country, 'ad_type' => $item->slug]) }}">
                                                        {{ __($item->slug) }}</a>
                                                    </h5>
                                                </div>
                                                <div class="row g-1">
                                                    @foreach ($item->subcategories as $scat)
                                                        <div class="col-md-12">
                                                            <div class="mt-2">
                                                                <ul class="list-group category_list">
                                                                    <li><a href="{{ route('frontend.search', ['country' => $country, 'ad_type' => $scat->slug, 'category' => $scat->slug]) }}">{{ __($scat->name) }}</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="sidebar_right">
                        <div class="heading3 text-center">
                            <form action="{{ route('frontend.localization') }}" method="post">
                                @csrf
                                <select name="language" id="language"
                                    class="form-control form-select language_dropdown mb-3" onchange="this.form.submit()">
                                    <option value="en" @if (Session::get('locale') == 'en') selected @endif>English
                                    </option>
                                    <option value="hi" @if (Session::get('locale') == 'hi') selected @endif>Hindi</option>
                                </select>
                            </form>

                            <hr>
                            <form action="{{ route('frontend.setCountry') }}" method="post">
                                @csrf
                                <select name="country" id="country"
                                    class="form-control form-select language_dropdown mb-3 select2"
                                    onchange="this.form.submit()">
                                    @if (isset($countries) && count($countries) > 0)
                                        @foreach ($countries as $key => $row)
                                            @php $iso = strtolower($row->iso) @endphp
                                            <option value="{{ $iso }}" {{ $country == $iso ? 'selected' : '' }}>
                                                {{ $row->name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </form>

                        @if (isset($cities) && count($cities) > 0)
                        <div class="mt-2 list-syle-hover">
                            <ul class="list-group ">
                                @foreach ($cities as $key => $city)
                                <li><a href="{{ route('frontend.search',['country'=>$country]) }}?city={{ $city->slug }}">
                                {{ $city->name }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                        @endif

                        </div>
                    </div>
                </div>
            </div>
            <footer class="text-center footer_menu">
                <div class="container">
                    <div class="p-3">
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
    </div>


    {{-- mobile version --}}
    <div class="mobile-view d-block d-md-none">
        <div class="mobile_header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-5">
                        <div class="mobile_heade_left">
                            <div class="site_logo">
                                <a class="header_logo" name="logoLink" href="index.html">CL</a>
                                <a href="index.html">Jerusalem</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mobile_heade_right float-end">
                            <ul>
                                <li><a href="{{ route('frontend.search') }}">Post</a></li>
                                <li><a href="{{ route('frontend.search') }}">Account</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mobile_body">
                <form action="#" method="post" class="mb-3 mt-3 p-2">
                    <div class="input-group">
                        <input type="text" name="search" id="search" class="form-control"
                            placeholder="Search..." required>
                        <button type="submit" class="text-input-group"><i class="la la-search"></i></button>
                    </div>
                </form>
                <div class="accordion_item mb-4">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading_1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse_1" aria-expanded="false" aria-controls="collapse_1">
                                    For Sale
                                </button>
                            </h2>
                            <div id="collapse_1" class="accordion-collapse collapse" aria-labelledby="heading_1"
                                data-bs-parent="#accordionExample">
                                <div class="accordion_body">
                                    <ul>
                                        <li><a href="{{ route('frontend.search') }}">all for sale</a></li>
                                        <li><a href="{{ route('frontend.search') }}">antiques</a></li>
                                        <li><a href="{{ route('frontend.search') }}">appliances</a></li>
                                        <li><a href="{{ route('frontend.search') }}">arts+crafts</a></li>
                                        <li><a href="{{ route('frontend.search') }}">atv/utv/sno</a></li>
                                        <li><a href="{{ route('frontend.search') }}">aviation</a></li>
                                        <li><a href="{{ route('frontend.search') }}">barter</a></li>
                                        <li><a href="{{ route('frontend.search') }}">beauty</a></li>
                                        <li><a href="{{ route('frontend.search') }}">bikes</a></li>
                                        <li><a href="{{ route('frontend.search') }}">boat parts</a></li>
                                        <li><a href="{{ route('frontend.search') }}">books</a></li>
                                        <li><a href="{{ route('frontend.search') }}">business</a></li>
                                        <li><a href="{{ route('frontend.search') }}">computer</a></li>
                                        <li><a href="{{ route('frontend.search') }}">collectibles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading_2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse_2" aria-expanded="false" aria-controls="collapse_2">
                                    Jobs
                                </button>
                            </h2>
                            <div id="collapse_2" class="accordion-collapse collapse" aria-labelledby="heading_2"
                                data-bs-parent="#accordionExample">
                                <div class="accordion_body">
                                    <ul>
                                        <li><a href="{{ route('frontend.search') }}">all for sale</a></li>
                                        <li><a href="{{ route('frontend.search') }}">antiques</a></li>
                                        <li><a href="{{ route('frontend.search') }}">appliances</a></li>
                                        <li><a href="{{ route('frontend.search') }}">arts+crafts</a></li>
                                        <li><a href="{{ route('frontend.search') }}">atv/utv/sno</a></li>
                                        <li><a href="{{ route('frontend.search') }}">aviation</a></li>
                                        <li><a href="{{ route('frontend.search') }}">barter</a></li>
                                        <li><a href="{{ route('frontend.search') }}">beauty</a></li>
                                        <li><a href="{{ route('frontend.search') }}">bikes</a></li>
                                        <li><a href="{{ route('frontend.search') }}">boat parts</a></li>
                                        <li><a href="{{ route('frontend.search') }}">books</a></li>
                                        <li><a href="{{ route('frontend.search') }}">business</a></li>
                                        <li><a href="{{ route('frontend.search') }}">computer</a></li>
                                        <li><a href="{{ route('frontend.search') }}">collectibles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading_3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse_3" aria-expanded="false" aria-controls="collapse_3">
                                    Housing
                                </button>
                            </h2>
                            <div id="collapse_3" class="accordion-collapse collapse" aria-labelledby="heading_3"
                                data-bs-parent="#accordionExample">
                                <div class="accordion_body">
                                    <ul>
                                        <li><a href="{{ route('frontend.search') }}">all for sale</a></li>
                                        <li><a href="{{ route('frontend.search') }}">antiques</a></li>
                                        <li><a href="{{ route('frontend.search') }}">appliances</a></li>
                                        <li><a href="{{ route('frontend.search') }}">arts+crafts</a></li>
                                        <li><a href="{{ route('frontend.search') }}">atv/utv/sno</a></li>
                                        <li><a href="{{ route('frontend.search') }}">aviation</a></li>
                                        <li><a href="{{ route('frontend.search') }}">barter</a></li>
                                        <li><a href="{{ route('frontend.search') }}">beauty</a></li>
                                        <li><a href="{{ route('frontend.search') }}">bikes</a></li>
                                        <li><a href="{{ route('frontend.search') }}">boat parts</a></li>
                                        <li><a href="{{ route('frontend.search') }}">books</a></li>
                                        <li><a href="{{ route('frontend.search') }}">business</a></li>
                                        <li><a href="{{ route('frontend.search') }}">computer</a></li>
                                        <li><a href="{{ route('frontend.search') }}">collectibles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading_4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">
                                    Community
                                </button>
                            </h2>
                            <div id="collapse_4" class="accordion-collapse collapse" aria-labelledby="heading_4"
                                data-bs-parent="#accordionExample">
                                <div class="accordion_body">
                                    <ul>
                                        <li><a href="{{ route('frontend.search') }}">all for sale</a></li>
                                        <li><a href="{{ route('frontend.search') }}">antiques</a></li>
                                        <li><a href="{{ route('frontend.search') }}">appliances</a></li>
                                        <li><a href="{{ route('frontend.search') }}">arts+crafts</a></li>
                                        <li><a href="{{ route('frontend.search') }}">atv/utv/sno</a></li>
                                        <li><a href="{{ route('frontend.search') }}">aviation</a></li>
                                        <li><a href="{{ route('frontend.search') }}">barter</a></li>
                                        <li><a href="{{ route('frontend.search') }}">beauty</a></li>
                                        <li><a href="{{ route('frontend.search') }}">bikes</a></li>
                                        <li><a href="{{ route('frontend.search') }}">boat parts</a></li>
                                        <li><a href="{{ route('frontend.search') }}">books</a></li>
                                        <li><a href="{{ route('frontend.search') }}">business</a></li>
                                        <li><a href="{{ route('frontend.search') }}">computer</a></li>
                                        <li><a href="{{ route('frontend.search') }}">collectibles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading_5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse_5" aria-expanded="false" aria-controls="collapse_5">
                                    Services
                                </button>
                            </h2>
                            <div id="collapse_5" class="accordion-collapse collapse" aria-labelledby="heading_5"
                                data-bs-parent="#accordionExample">
                                <div class="accordion_body">
                                    <ul>
                                        <li><a href="{{ route('frontend.search') }}">all for sale</a></li>
                                        <li><a href="{{ route('frontend.search') }}">antiques</a></li>
                                        <li><a href="{{ route('frontend.search') }}">appliances</a></li>
                                        <li><a href="{{ route('frontend.search') }}">arts+crafts</a></li>
                                        <li><a href="{{ route('frontend.search') }}">atv/utv/sno</a></li>
                                        <li><a href="{{ route('frontend.search') }}">aviation</a></li>
                                        <li><a href="{{ route('frontend.search') }}">barter</a></li>
                                        <li><a href="{{ route('frontend.search') }}">beauty</a></li>
                                        <li><a href="{{ route('frontend.search') }}">bikes</a></li>
                                        <li><a href="{{ route('frontend.search') }}">boat parts</a></li>
                                        <li><a href="{{ route('frontend.search') }}">books</a></li>
                                        <li><a href="{{ route('frontend.search') }}">business</a></li>
                                        <li><a href="{{ route('frontend.search') }}">computer</a></li>
                                        <li><a href="{{ route('frontend.search') }}">collectibles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    {{-- <div class="d-none">
        <form action="{{ route('frontend.search') }}" method="get" id="eventForm">
            <input type="hidden" name="category" value="event-class">
            <input type="hidden" name="date" id="date_select">
        </form>
    </div> --}}

@endsection

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker({
                dateFormat: 'dd-mm-yy',
                onSelect: function (date, datepicker) {
                    if (date != "") {
                        alert("Selected Date: " + date);
                        // $('#date_select').val(date);
                        // $('#eventForm').submit();
                        var base_url = $('#base_url').val();
                        var country = $('#country').val();
                        var full_url = base_url+'/shop/'+country+'/events/?date='+date
                        window.location.replace(full_url);
                    }
                }
            });
        });
        $(document).ready(function() {
            $(".select2").select2();
        });
    </script>
@endpush
