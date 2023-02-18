@extends('frontend.layouts.app', ['nav' => 'yes'])
@section('meta')
@endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('image_uploader/dist/image-uploader.min.css') }}">
@endpush
@section('title')
    {{ __('Post') }}
@endsection
@section('breadcrumb')
    <ul>
        <li>Ffuts ></li>
        <li>{{ $ad_type->name }} ></li>
        <li>{{ $category->name }} ></li>
        <li>{{ $subCategory->name }}</li>
    </ul>
@endsection

@section('content')
    <div class="main_template mt-5 mb-5">
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="ad_post_form">
                <form action="{{ route('frontend.post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="ad_type_slug" value="{{ $ad_type->slug }}">
                    <input type="hidden" name="ad_type_id" value="{{ $ad_type->id }}">
                    <input type="hidden" name="category_id" value="{{ $category->id }}">
                    <input type="hidden" name="subcategory_id" value="{{ $subCategory->id }}">
                    <h4 class="text-center mb-4 mt-4 bg-light">{{ $subCategory->name }}</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="title" class="form-label text-success">posting title</label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="city" class="form-label">city ​​or neighborhood</label>
                                <input type="text" name="city" id="city" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="postcode" class="form-label">Postal code</label>
                                <input type="number" name="postcode" id="postcode" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <span class="text-dark">Only one description per posting.</span><br />
                                <label for="description" class="form-label text-success">description</label>
                                <textarea name="description" id="description" cols="30" rows="5" class="form-control" style="height: 150px;"
                                    required></textarea>
                            </div>
                        </div>
                        <div class="input-field mb-3">
                            <label class="active">{{ __('upload_photos') }}</label>
                            <div id="multiple_image_upload" class="input-images-2" style="padding-top: .5rem;"></div>
                        </div>


                    </div>

                    {{-- For Job --}}
                    @if ($ad_type->slug == 'job-offered')
                        @include('frontend.post.pages.job-offered')
                    @endif
                    <!-- gig/engagement offered -->

                    @if ($ad_type->slug == 'engagement-offered')
                        @include('frontend.post.pages.engagement-offered')
                    @endif
                    <!-- resume / job wanted -->
                    @if ($ad_type->slug == 'job-wanted')
                        @include('frontend.post.pages.job-wanted')
                    @endif

                    <!-- housing offered -->
                    @if ($ad_type->slug == 'housing-offered')
                        @include('frontend.post.pages.housing-offered')
                    @endif

                    <!-- housing wanted -->
                    @if ($ad_type->slug == 'housing-wanted')
                        @include('frontend.post.pages.housing-wanted')
                    @endif


                    <div class="mt-5 text-center">
                        <button type="submit" class="btn btn-light">Ad Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('image_uploader/dist/image-uploader.min.js') }}"></script>
    <script>
        $('.input-images-2').imageUploader({
            maxSize: 2 * 1024 * 1024,
            maxFiles: 10,
            multiple: true,
        });
    </script>

    <script>
        $('#show_phone').change(function() {
            if ($(this).is(':checked')) {
                $('.disabled_checked input').not(this).removeAttr('disabled');
            } else {
                $('.disabled_checked input').not(this).attr('disabled', true);
            }
        });
        $('#licensed').change(function() {
            if ($(this).is(':checked')) {
                $('#license_info').removeAttr('disabled');
            }
        });
        $('#unlicensed').change(function() {
            if ($(this).is(':checked')) {
                $('#license_info').attr('disabled', true);
            }
        });
        $('#broker_1').change(function() {
            if ($(this).is(':checked')) {
                console.log(1);
                $('#broker_fee_detailed').removeAttr('disabled');
            }else{
                $('#broker_fee_detailed').attr('disabled', true);

            }
        });
        $('#application_1').change(function() {
            if ($(this).is(':checked')) {
                $('#application_fee_detailed').removeAttr('disabled');
            }else{
                $('#application_fee_detailed').attr('disabled', true);

            }
        });
    </script>
@endpush
