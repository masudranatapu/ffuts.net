@extends('frontend.layouts.app', ['nav' => 'yes'])

@section('meta')
@endsection

@push('style')
@endpush

@section('breadcrumb')
    <ul>
        <li>About</li>
    </ul>
@endsection

@section('content')
    <div class="main_template">
        <div class="container">
            <div class="single_product mt-5 mb-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-9">
                        <div class="about_content">
                            <div class="mb-4 text-center">
                                <img src="{{ asset($cms->about_background) }}" class="w-100 rounded border shadow-sm"
                                    alt="">
                            </div>
                            <div class="content">
                                <p>{!! $cms->about_body !!}</p>
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
