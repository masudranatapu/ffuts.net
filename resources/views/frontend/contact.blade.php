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
    <style>
        .error {
            color: red;
        }
    </style>
@endpush
@section('title')
{{ __('Contact') }}
@endsection
@section('breadcrumb')
    <ul>
        <li>{{ __('contact') }}</li>
    </ul>
@endsection

@section('content')
    <!-- ======================= breadcrumb start  ============================ -->
    <div class="breadcrumb_sec mt-5">
        <div class="container">
            <div class="breadcrumb_nav text-center">
                <h2>Contact us</h2>
            </div>
        </div>
    </div>
    <!-- ======================= breadcrumb end  ============================ -->

    <!-- ======================= contact start  ============================ -->
    <div class="contact_sec mb-5 mt-5">
        <div class="container">
            <form action="{{ route('frontend.contact.submit') }}" method="post" class="contact_form submitForm"
                id="contactForm" novalidate>
                @csrf
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                    class="form-control" placeholder="Enter your name" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    class="form-control" placeholder="Enter your email" required>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                                <input type="number" name="phone" id="phone" {{ old('phone') }}
                                    class="form-control" placeholder="Enter your phone" required>
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="reason" class="form-label">Reason for Inquiry <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="reason" id="phone" {{ old('reason') }}
                                    class="form-control" placeholder="Your Reason" required>
                                @error('reason')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control" required
                                    placeholder="Write your message" style="height:150px !important;"></textarea>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary send">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
    <!-- ======================= contact end  ============================ -->
@endsection

@push('script')
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script>
        $("#contactForm").validate({
            submitHandler: function(form) {
                $(form).find('.send').attr('disabled', true);
                $(form).find('.send').html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...'
                );
                return true;
            }
        });
    </script>
@endpush
