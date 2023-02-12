@extends('frontend.layouts.app', ['nav' => 'yes'])

@push('style')
@endpush

@section('breadcrumb')
    <ul>
        <li>Jerusalem ></li>
        <li>case ></li>
        <li>offices and activities trade</li>
    </ul>
@endsection

@section('content')
    <div class="main_template mt-5">
        <div class="container">
            <div class="ad_post_form">
                <div class="mb-4">
                    <h6><span>choose a Sub Category:</span> (see <a href="#">ban</a> list before posting.)
                    </h6>
                </div>
                <form action="{{ route('post.step.three') }}" method="get">

                    @foreach($post_types_subCategory as $key => $value)
                    <div class="form-check">
            <input class="form-check-input" type="radio" value="{{ $value ->id}}" name="sub_category" id="category_1"
                            required>
                        <label class="form-check-label" for="category_1">
                            {{ $value->name }}
                        </label>
                    </div>
                    @endforeach
                    <div class="mt-5">
                           <button type="submit" class="btn btn-light">Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
