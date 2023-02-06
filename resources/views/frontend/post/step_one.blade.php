@extends('frontend.layouts_three.app_three')

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
    <div class="row d-flex mt-5 justify-content-center">
        <div class="col-lg-8">
            <div class="ad_post_form">
                <div class="mb-4">
                    <p>Limit each listing to a single zone and category, one every 48 hours</p>
                    <h6><strong>What type of ad it is:</strong> (see <a href="#">ban</a> list before posting.)
                    </h6>
                </div>
                <form action="#" method="post">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="job offer" name="category" id="category_1"
                            required>
                        <label class="form-check-label" for="category_1">
                            job offer
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="" name="category" id="category_2"
                            required>
                        <label class="form-check-label" for="category_2">
                            cv/job seeker
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="" name="category" id="category_3"
                            required>
                        <label class="form-check-label" for="category_3">
                            house offer
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="" name="category" id="category_4"
                            required>
                        <label class="form-check-label" for="category_4">
                            looking for a home
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="" name="category" id="category_5"
                            required>
                        <label class="form-check-label" for="category_5">
                            for sale/by own
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="" name="category" id="category_6"
                            required>
                        <label class="form-check-label" for="category_6">
                            for sale/for sale
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="" name="category" id="category_7"
                            required>
                        <label class="form-check-label" for="category_7">
                            sought by seller
                        </label>
                    </div>

                    <div class="my-5">
                        <button type="submit" class="btn btn-light">Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
