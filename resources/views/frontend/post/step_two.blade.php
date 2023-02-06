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
                    <h6><strong>choose a category:</strong> (see <a href="#">ban</a> list before posting.)
                    </h6>
                </div>
                <form action="#" method="post">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="" name="category" id="category_1"
                            required>
                        <label class="form-check-label" for="category_1">
                            rooms and shares
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="" name="category" id="category_2"
                            required>
                        <label class="form-check-label" for="category_2">
                            apartment / housing for rent
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="" name="category" id="category_3"
                            required>
                        <label class="form-check-label" for="category_3">
                            real estate - agency
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="" name="category" id="category_4"
                            required>
                        <label class="form-check-label" for="category_4">
                            real estate - owner
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="" name="category" id="category_5"
                            required>
                        <label class="form-check-label" for="category_5">
                            holiday homes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="" name="category" id="category_6"
                            required>
                        <label class="form-check-label" for="category_6">
                            parking lats and warehouses
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="" name="category" id="category_7"
                            required>
                        <label class="form-check-label" for="category_7">
                            house swap
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="" name="category" id="category_8"
                            required>
                        <label class="form-check-label" for="category_8">
                            sablets and temporary home
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="" name="category" id="category_9"
                            required>
                        <label class="form-check-label" for="category_9">
                            ofices and activities trade
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
