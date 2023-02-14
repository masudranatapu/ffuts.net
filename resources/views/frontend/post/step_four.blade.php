@extends('frontend.layouts.app', ['nav' => 'yes'])

@push('style')
@endpush

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
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
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
                    </div>

                    {{-- For Job --}}
                    @if ($ad_type->slug == 'job-offered')
                        <div class="col-12 mb-4">
                            <div class="form_wrapper">
                                <div class="title mb-3">
                                    <h6>Ad Details</h6>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="employment_type" class="form-label text-success">kind of
                                                employment</label>
                                            <select name="employment_type" id="employment_type" class="form-control"
                                                required>
                                                <option value="" class="d-none">-</option>
                                                <option value="full time">full time</option>
                                                <option value="part time">part time</option>
                                                <option value="contract">contract</option>
                                                <option value="at the choice of the employee">at the choice of the
                                                    employee</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="designation[]"
                                                value="" id="service_1"
                                                value="direct contact of personnel recruiters allowed">
                                            <label class="form-check-label" for="service_1">
                                                direct contact of personnel recruiters allowed
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="designation[]"
                                                value="" id="service_2" value="internship">
                                            <label class="form-check-label" for="service_2">
                                                internship
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="designation[]"
                                                value="" id="service_3" value="nonprofit organization">
                                            <label class="form-check-label" for="service_3">
                                                nonprofit organization
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="designation[]"
                                                value="" id="service_4"
                                                value="availability of relocation assistance">
                                            <label class="form-check-label" for="service_4">
                                                availability of relocation assistance
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="designation[]"
                                                value="" id="service_5" value="possibility of teleworking">
                                            <label class="form-check-label" for="service_5">
                                                possibility of teleworking
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="job_title" class="form-label text-success">job title</label>
                                <input type="text" name="job_title" id="job_title" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="salary" class="form-label text-success">salary</label>
                                <input type="number" name="price" id="salary" class="form-control"
                                    placeholder="Salary" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="company_name" class="form-label">company name</label>
                                <input type="text" name="company_name" id="company_name" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <!-- Contact Form -->
                            <div class="form_wrapper">
                                <div class="title mb-3">
                                    <h6>Contact Info</h6>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" name="email" id="email" class="form-control"
                                                placeholder="Your email address" required>
                                        </div>
                                        <div class="mb-3">
                                            <span class="text-dark" style="font-weight:600;">email privacy
                                                options</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="email_privacy"
                                                    id="privacy_1" value="CL mail relay">
                                                <label class="form-check-label" for="privacy_1">
                                                    CL mail relay (recommended)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="email_privacy"
                                                    id="privacy_2" value="show my real email address">
                                                <label class="form-check-label" for="privacy_2">
                                                    show my real email address
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="email_privacy"
                                                    id="privacy_3" value="no replies to this email">
                                                <label class="form-check-label" for="privacy_3">
                                                    no replies to this email
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 inline_checkbox disabled_checked">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="show_phone"
                                                value="1" id="show_phone">
                                            <label class="form-check-label" for="show_phone">
                                                show my phone number
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="phone_call"
                                                id="calls_ok" disabled value="1">
                                            <label class="form-check-label" for="calls_ok">
                                                phone calls OK
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="phone_text"
                                                id="textorsms" disabled value="1">
                                            <label class="form-check-label" for="textorsms">
                                                text/sms OK
                                            </label>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-lg-6">
                                                <div class="mb-1">
                                                    <label for="phone" class="form-label">Phone number</label>
                                                    <input type="number" name="phone" id="phone"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-1">
                                                    <label for="phone_2" class="form-label">Local number</label>
                                                    <input type="number" name="phone_2" id="phone_2"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-1">
                                                    <label for="contact_name" class="form-label">contact name</label>
                                                    <input type="text" name="contact_name" id="contact_name"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="job_for_disabilities"
                                    required>
                                <label class="form-check-label" for="job_for_disabilities" style="font-size: 14px;">
                                    job open to people with disabilities
                                </label>
                            </div>
                        </div>
                    @endif


                    <!-- gig offered -->

                    @if ($ad_type->slug == 'engagement-offered')
                        <h4 class="text-center mb-4 mt-4 bg-light">gig offered (I'm hiring for a short-term, small or odd
                            job)
                        </h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="ad_title" class="form-label text-success">posting title</label>
                                    <input type="text" name="ad_title" id="ad_title" class="form-control" required>
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
                                    <span class="text-dark">Only one job description per posting.</span><br />
                                    <label for="description" class="form-label text-success">description</label>
                                    <textarea name="description" id="description" cols="30" rows="5" class="form-control"
                                        style="height: 150px;" required></textarea>
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <div class="form_wrapper">
                                    <div class="title mb-3">
                                        <h6>Contact Info</h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" name="email" id="email" class="form-control"
                                                    placeholder="Your email address" required>
                                            </div>
                                            <div class="mb-3">
                                                <span class="text-dark" style="font-weight:600;">email privacy
                                                    options</span>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="email_privacy"
                                                        id="privacy_1" checked>
                                                    <label class="form-check-label" for="privacy_1">
                                                        CL mail relay (recommended)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="email_privacy"
                                                        id="privacy_2">
                                                    <label class="form-check-label" for="privacy_2">
                                                        show my real email address
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="email_privacy"
                                                        id="privacy_3">
                                                    <label class="form-check-label" for="privacy_3">
                                                        no replies to this email
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 inline_checkbox disabled_checked">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="show_phone"
                                                    value="1" id="show_phone">
                                                <label class="form-check-label" for="show_phone">
                                                    show my phone number
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="phone_call"
                                                    id="calls_ok" disabled value="1">
                                                <label class="form-check-label" for="calls_ok">
                                                    phone calls OK
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="phone_text"
                                                    id="textorsms" disabled value="1">
                                                <label class="form-check-label" for="textorsms">
                                                    text/sms OK
                                                </label>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-lg-6">
                                                    <div class="mb-1">
                                                        <label for="phone" class="form-label">Phone number</label>
                                                        <input type="number" name="phone" id="phone"
                                                            class="form-control" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-1">
                                                        <label for="phone_2" class="form-label">Local number</label>
                                                        <input type="number" name="phone_2" id="phone_2"
                                                            class="form-control" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-1">
                                                        <label for="contact_name" class="form-label">contact name</label>
                                                        <input type="text" name="contact_name" id="contact_name"
                                                            class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="term_condition"
                                        required>
                                    <label class="form-check-label" for="term_condition" style="font-size: 14px;">
                                        ok for others to contact you about other services, products or commercial interests
                                    </label>
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- resume / job wanted -->
                    @if ($ad_type->slug == 'job-wanted')
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="form_wrapper availability_check">
                                    <div class="title mb-3">
                                        <h6 class="text-success">availability (you must select at least one)</h6>
                                    </div>
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="checkbox" name="availability[]"
                                            id="availabillity_1" value="morning">
                                        <label class="form-check-label" for="availabillity_1">
                                            morning
                                        </label>
                                    </div>
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="checkbox" name="availability[]"
                                            id="availabillity_2" value="afternoon">
                                        <label class="form-check-label" for="availabillity_2">
                                            afternoon
                                        </label>
                                    </div>
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="checkbox" name="availability[]"
                                            id="availabillity_3" value="evening">
                                        <label class="form-check-label" for="availabillity_3">
                                            evening
                                        </label>
                                    </div>
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="checkbox" name="availability[]"
                                            id="availabillity_4" value="overnight">
                                        <label class="form-check-label" for="availabillity_4">
                                            overnight
                                        </label>
                                    </div>
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="checkbox" name="availability[]"
                                            id="availabillity_5" value="weekdays">
                                        <label class="form-check-label" for="availabillity_5">
                                            weekdays
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="availability[]"
                                            id="availabillity_6" value="weekends">
                                        <label class="form-check-label" for="availabillity_6">
                                            weekends
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <div class="form_wrapper">
                                    <div class="title mb-3">
                                        <h6>posting details</h6>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="education" class="form-label text-success">education</label>
                                                <select name="education" id="education" class="form-control" required>
                                                    <option class="d-none">-</option>
                                                    <option value="less than high school">less than high school</option>
                                                    <option value="high school/GED">high school/GED</option>
                                                    <option value="some college">some college</option>
                                                    <option value="associates">associates</option>
                                                    <option value="bachelors">bachelors</option>
                                                    <option value="masters">masters</option>
                                                    <option value="doctoral">doctoral</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="direct_contact"
                                                    id="direct_contact" value="direct contact by recruiters is ok" >
                                                <label class="form-check-label" for="direct_contact">
                                                    direct contact by recruiters is ok
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <div class="form-check me-3" style="display:inline-block;">
                                    <input class="form-check-input" type="radio" name="is_license" id="unlicensed"
                                        value="0" checked>
                                    <label class="form-check-label" for="unlicensed">
                                        unlicensed
                                    </label>
                                </div>
                                <div class="form-check me-3" style="display:inline-block;">
                                    <input class="form-check-input" type="radio" name="is_license" id="licensed"
                                        value="1">
                                    <label class="form-check-label" for="licensed">
                                        licensed
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label for="license_info" class="form-label">licensure information</label>
                                    <input type="text" name="license_info" id="license_info" class="form-control" disabled
                                        required>
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <div class="form_wrapper">
                                    <div class="title mb-3">
                                        <h6 class="text-success">contact info</h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" name="email" id="email" class="form-control"
                                                    placeholder="Your email address" required>
                                            </div>
                                            <div class="mb-3">
                                                <span class="text-dark" style="font-weight:600;">email privacy
                                                    options</span>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="email_privacy"
                                                        id="privacy_1" checked>
                                                    <label class="form-check-label" for="privacy_1">
                                                        CL mail relay (recommended)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="email_privacy"
                                                        id="privacy_2">
                                                    <label class="form-check-label" for="privacy_2">
                                                        no replies to this email
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 inline_checkbox disabled_checked">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="show_phone"
                                                    value="1" id="show_phone">
                                                <label class="form-check-label" for="show_phone">
                                                    show my phone number
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="phone_call"
                                                    id="calls_ok" disabled value="1">
                                                <label class="form-check-label" for="calls_ok">
                                                    phone calls OK
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="phone_text"
                                                    id="textorsms" disabled value="1">
                                                <label class="form-check-label" for="textorsms">
                                                    text/sms OK
                                                </label>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-lg-6">
                                                    <div class="mb-1">
                                                        <label for="phone" class="form-label">Phone number</label>
                                                        <input type="number" name="phone" id="phone"
                                                            class="form-control" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-1">
                                                        <label for="phone_2" class="form-label">Local number</label>
                                                        <input type="number" name="phone_2" id="phone_2"
                                                            class="form-control" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-1">
                                                        <label for="contact_name" class="form-label">contact name</label>
                                                        <input type="text" name="contact_name" id="contact_name"
                                                            class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="term_condition" required>
                                    <label class="form-check-label" for="term_condition" style="font-size: 14px;">
                                        ok for others to contact you about other services, products or commercial interests
                                    </label>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- housing offered -->
                    @if ($ad_type->slug == 'housing-offered')
                        <h4 class="text-center mb-4 mt-4 bg-light">housing offered</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="ad_title" class="form-label text-success">posting title</label>
                                    <input type="text" name="ad_title" id="ad_title" class="form-control" required>
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
                                    <label for="postal" class="form-label">Postal code</label>
                                    <input type="number" name="postal" id="postal" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label text-success">description</label>
                                    <textarea name="description" id="description" cols="30" rows="5" class="form-control"
                                        style="height: 150px;" required></textarea>
                                </div>
                            </div>


                            <div class="col-12 mb-4">
                                <div class="form_wrapper">
                                    <div class="title mb-3">
                                        <h6 class="text-success">posting details</h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="mb-3">
                                                <label for="sqft" class="form-label">sqft</label>
                                                <input type="number" name="sqft" id="sqft" value="0"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="select_dropdown">
                                                <label for="houssing_type">houssing type</label>
                                                <select name="houssing_type" id="houssing_type" class="form-control">
                                                    <option value="apartment">apartment</option>
                                                    <option value="condo">condo</option>
                                                    <option value="cotage/cabin">cotage/cabin</option>
                                                    <option value="duplex">duplex</option>
                                                    <option value="flat">flat</option>
                                                    <option value="house">house</option>
                                                    <option value="in-law">in-law</option>
                                                    <option value="loft">loft</option>
                                                    <option value="townhouse">townhouse</option>
                                                    <option value="manufactured">manufactured</option>
                                                    <option value="assisted living">assisted living</option>
                                                </select>
                                            </div>
                                            <div class="select_dropdown">
                                                <label for="laundry" class="text-success">laundry</label>
                                                <select name="laundry" id="laundry" class="form-control">
                                                    <option value="" class="d-none">-</option>
                                                    <option value="w/d in unit">w/d in unit</option>
                                                    <option value="w/d hookups">w/d hookups</option>
                                                    <option value="laundry in bldg">laundry in bldg</option>
                                                    <option value="laundry on site">laundry on site</option>
                                                    <option value="no lanudry on site">no lanudry on site</option>
                                                </select>
                                            </div>
                                            <div class="select_dropdown">
                                                <label for="parking" class="text-success">parking</label>
                                                <select name="parking" id="parking" class="form-control">
                                                    <option value="" class="d-none">-</option>
                                                    <option value="carport">carport</option>
                                                    <option value="attached garage">attached garage</option>
                                                    <option value="detached garage">detached garage</option>
                                                    <option value="off-street parking">off-street parking</option>
                                                    <option value="street parking">street parking</option>
                                                    <option value="valet parking">valet parking</option>
                                                    <option value="no parking">no parking</option>
                                                </select>
                                            </div>
                                            <div class="select_dropdown">
                                                <label for="bedrooms">bedrooms</label>
                                                <select name="bedrooms" id="bedrooms" class="form-control">
                                                    <option value="" class="d-none">-</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </div>
                                            <div class="select_dropdown">
                                                <label for="bathrooms">bathrooms</label>
                                                <select name="bathrooms" id="bathrooms" class="form-control">
                                                    <option value="" class="d-none">-</option>
                                                    <option value="shared">shared</option>
                                                    <option value="split">split</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                    <option value="2">2</option>
                                                    <option value="2.5">2.5</option>
                                                    <option value="3">3</option>
                                                    <option value="3.5">3.5</option>
                                                    <option value="4">4</option>
                                                    <option value="4.5">4.5</option>
                                                    <option value="5">5</option>
                                                    <option value="5.5">5.5</option>
                                                    <option value="6">6</option>
                                                    <option value="6.5">6.5</option>
                                                    <option value="7">7</option>
                                                    <option value="7.5">7.5</option>
                                                    <option value="8">8</option>
                                                    <option value="8.5">8.5</option>
                                                    <option value="9+">9+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name=""
                                                    id="cats_ok">
                                                <label class="form-check-label" for="cats_ok">cats ok</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name=""
                                                    id="dogs_ok">
                                                <label class="form-check-label" for="dogs_ok">dogs ok</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name=""
                                                    id="furnished">
                                                <label class="form-check-label" for="furnished">furnished</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name=""
                                                    id="no_smoking">
                                                <label class="form-check-label" for="no_smoking">no smoking</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name=""
                                                    id="wheelchair_accessible">
                                                <label class="form-check-label" for="wheelchair_accessible">wheelchair
                                                    accessible</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name=""
                                                    id="air_conditioning">
                                                <label class="form-check-label" for="air_conditioning">air
                                                    conditioning</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name=""
                                                    id="EV charging">
                                                <label class="form-check-label" for="EV charging">EV charging</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="mb-3">
                                                <label for="available_on" class="form-label">available on</label>
                                                <input type="date" name="available_on" id="available_on"
                                                    value="0" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <div class="form_wrapper">
                                    <div class="title mb-3">
                                        <h6 class="text-success">contact info</h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" name="email" id="email" class="form-control"
                                                    placeholder="Your email address" required>
                                            </div>
                                            <div class="mb-3">
                                                <span class="text-dark" style="font-weight:600;">email privacy
                                                    options</span>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="email_privacy"
                                                        id="privacy_1" checked>
                                                    <label class="form-check-label" for="privacy_1">
                                                        CL mail relay (recommended)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="email_privacy"
                                                        id="privacy_2">
                                                    <label class="form-check-label" for="privacy_2">
                                                        no replies to this email
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 inline_checkbox disabled_checked ">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="show_phone"
                                                    value="1" id="show_phone">
                                                <label class="form-check-label" for="show_phone">
                                                    show my phone number
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name=""
                                                    id="calls_ok" disabled>
                                                <label class="form-check-label" for="calls_ok">
                                                    phone calls OK
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name=""
                                                    id="textorsms" disabled>
                                                <label class="form-check-label" for="textorsms">
                                                    text/sms OK
                                                </label>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-lg-6">
                                                    <div class="mb-1">
                                                        <label for="telephone" class="form-label">Telephone number</label>
                                                        <input type="number" name="telephone" id="telephone"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-1">
                                                        <label for="internal" class="form-label">internal</label>
                                                        <input type="text" name="internal" id="internal"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-1">
                                                        <label for="contact_name" class="form-label">contact name</label>
                                                        <input type="text" name="contact_name" id="contact_name"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="term_condition" name="other_contact" value="1" required>
                                    <label class="form-check-label" for="term_condition" style="font-size: 14px;">
                                        ok for others to contact you about other services, products or commercial interests
                                    </label>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- housing wanted -->
                    @if ($ad_type->slug == 'housing-wanted')
                        <h4 class="text-center mb-4 mt-4 bg-light">housing wanted</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="ad_title" class="form-label text-success">posting title</label>
                                    <input type="text" name="ad_title" id="ad_title" class="form-control" required>
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
                                    <label for="postal" class="form-label">Postal code</label>
                                    <input type="number" name="postal" id="postal" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label text-success">description</label>
                                    <textarea name="description" id="description" cols="30" rows="5" class="form-control"
                                        style="height: 150px;" required></textarea>
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <div class="form_wrapper">
                                    <div class="title mb-3">
                                        <h6>posting details</h6>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="" id="">
                                        <label class="form-check-label" for="">cats ok</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="" id="">
                                        <label class="form-check-label" for="">dogs ok</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="" id="">
                                        <label class="form-check-label" for="">air conditioning</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <div class="form_wrapper">
                                    <div class="title mb-3">
                                        <h6>fees and licensure</h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="broker_fee"
                                                    id="broker_1">
                                                <label class="form-check-label" for="broker_1">broker fee</label>
                                            </div>
                                            <div class="mb-1">
                                                <label for="fee_detailed" class="form-label">detailed fee description
                                                    please</label>
                                                <input type="text" name="fee_detailed" id="fee_detailed"
                                                    class="form-control" readonly>
                                            </div>
                                            <div class="mb-1">
                                                <label for="fee_detailed" class="form-label">detailed fee description
                                                    please</label>
                                                <input type="text" name="fee_detailed" id="fee_detailed"
                                                    class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="application_fee"
                                                    id="application_1">
                                                <label class="form-check-label" for="application_1">application
                                                    fee</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <div class="form_wrapper">
                                    <div class="title mb-3">
                                        <h6 class="text-success">contact info</h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" name="email" id="email" class="form-control"
                                                    placeholder="Your email address" required>
                                            </div>
                                            <div class="mb-3">
                                                <span class="text-dark" style="font-weight:600;">email privacy
                                                    options</span>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="email_privacy"
                                                        id="privacy_1" checked>
                                                    <label class="form-check-label" for="privacy_1">
                                                        CL mail relay (recommended)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="email_privacy"
                                                        id="privacy_2">
                                                    <label class="form-check-label" for="privacy_2">
                                                        no replies to this email
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 inline_checkbox disabled_checked">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="show_phone"
                                                    value="1" id="show_phone">
                                                <label class="form-check-label" for="show_phone">
                                                    show my phone number
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name=""
                                                    id="calls_ok" disabled>
                                                <label class="form-check-label" for="calls_ok">
                                                    phone calls OK
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name=""
                                                    id="textorsms" disabled>
                                                <label class="form-check-label" for="textorsms">
                                                    text/sms OK
                                                </label>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-lg-6">
                                                    <div class="mb-1">
                                                        <label for="telephone" class="form-label">Telephone
                                                            number</label>
                                                        <input type="number" name="telephone" id="telephone"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-1">
                                                        <label for="internal" class="form-label">internal</label>
                                                        <input type="text" name="internal" id="internal"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-1">
                                                        <label for="contact_name" class="form-label">contact
                                                            name</label>
                                                        <input type="text" name="contact_name" id="contact_name"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="term_condition" required>
                                    <label class="form-check-label" for="term_condition" style="font-size: 14px;">
                                        ok for others to contact you about other services, products or commercial interests
                                    </label>
                                </div>
                            </div>
                        </div>
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
    </script>
@endpush