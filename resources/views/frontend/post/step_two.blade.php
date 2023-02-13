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
                    <h6><span>choose a category:</span> (see <a href="#">ban</a> list before posting.)
                    </h6>
                </div>
                <form action="{{ route('post.subCategory') }}" method="get">
                    @foreach($add_types_category as $key => $value)
                    <div class="form-check">
            <input class="form-check-input" type="radio" value="{{ $value ->id}}" name="category" id="category_1"
                            required>
                        <label class="form-check-label" for="category_1">
                            {{ $value->name }}
                        </label>
                         @error('category')
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
