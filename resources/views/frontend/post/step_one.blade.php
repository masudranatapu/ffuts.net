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
                    <p>please limit each posting to a single area and category, once per 48 hours</p>
                    <h6><span>what type of posting is this:</span> (see <a href="#">ban</a> list before posting.)
                    </h6>
                </div>
                <form action="{{ route('post.step.two') }}" method="get">
                        @foreach($add_types as $key => $value)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="{{ $value ->id}}" name="ad_type" id="category_1"
                                    required>
                                <label class="form-check-label" for="category_1">
                                    {{ $value->name }}
                                </label>
                                @error('ad_type')
                                    <span class="invalid-feedback"
                                        role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
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
