@extends('frontend.layouts.app', ['nav' => 'yes'])

@section('meta')
@endsection

@push('style')
@endpush
@section('title')
{{ __('Terms & Conditon') }}
@endsection
@section('breadcrumb')
    <ul>
        <li>Terms & Conditions</li>
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
                                <p>{!! $cms->terms_body !!}</p>
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
