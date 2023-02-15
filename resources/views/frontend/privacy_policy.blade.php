@extends('frontend.layouts.app', ['nav' => 'yes'])

@section('meta')
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
    </div>
@endsection

@push('script')
@endpush
