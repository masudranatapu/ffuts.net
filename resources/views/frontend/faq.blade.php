@extends('frontend.layouts.app', ['nav' => 'yes'])

@section('title') {{ $data['title'] ?? 'Page header' }} @endsection
@section('meta')
<meta property="title" content="{{ $meta_title }}" />
<meta property="description" content="{{ $meta_description }}" />
<meta property="keywords" content="{{ $meta_keywords }}" />
<meta property="og:title" content="{{ $meta_title }}" />
<meta property="og:description" content="{{ $meta_description }}" />
<meta property="og:keywords" content="{{ $meta_keywords }}" />
<meta property="og:image" content="{{ asset($meta_image) }}" />
@endsection

@push('style') @endpush
@section('breadcrumb')
    <ul>
        <li>{{ __('faq') }}</li>
    </ul>
@endsection
@section('content')
<!-- ======================= breadcrumb start  ============================ -->
<div class="breadcrumb_sec mt-5">
    <div class="container">
        <div class="breadcrumb_nav text-center">
            {{-- <h5>{{ $title ?? 'Page header' }}</h5> --}}
            <h2>Faq</h2>
        </div>
    </div>
</div>
<!-- ======================= breadcrumb end  ============================ -->

<!-- ======================= faq start  ============================ -->
<div class="faq_sec section mt-5">
    <div class="container">
        <div class="row">
            <div class="faq_question_wrap">
                <div class="accordion" id="accordionExample">

                    @foreach ($faqs as $key => $row)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading_{{ $key }}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_{{ $key }}" aria-expanded="true"
                                aria-controls="collapse_{{ $key }}">
                                {{ $row->question }}
                            </button>
                        </h2>
                        <div id="collapse_{{ $key }}" class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}"
                            aria-labelledby="heading_{{ $key }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>{{ $row->answer }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="text-center footer_menu mt-5">
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
<!-- ======================= faq end  ============================ -->
@endsection

@push('script')

@endpush
