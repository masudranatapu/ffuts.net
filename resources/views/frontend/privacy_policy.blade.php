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

@push('style')
@endpush
@section('title')
{{ __('Privacy Policy') }}
@endsection
@section('breadcrumb')
    <ul>
        <li>Privacy Policy</li>
    </ul>
@endsection

@section('content')
    <div class="main_template">
        <div class="container">
            <div class="single_product mt-5 mb-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-9">
                        <div class="page_content">
                            <div class="content">
                                <p>{!! $cms->privacy_body !!}</p>
                            </div>
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
                        <li><a href="{{ route('frontend.faq') }}">{{ __('faq') }} |</a></li>
                        <li><a href="{{ route('frontend.price.plan') }}">{{ __('price plan') }} |</a></li>
                        <li><a href="{{ route('frontend.shop') }}">{{ __('shop') }} |</a></li>
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
@endpush
