@extends('frontend.layouts.app', ['nav' => 'yes'])
@section('meta')
@endsection
@push('style')
    <style>
        .payment-style {
            width: 35px;
            padding: 1px;
        }
    </style>
@endpush
@section('title')
    {{ __('Payment post') }}
@endsection
@section('breadcrumb')
    <ul>
        <li>{{ $ad->ad_type->name }} ></li>
        <li>{{ $ad->category->name }} ></li>
        <li>{{ $ad->subcategory->name }}</li>
    </ul>
@endsection

@section('content')
    <div class="main_template mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card p-4 w-100 mb-5">
                        <table class="table ">
                            <tr>
                                <td>Post Title:</td>
                                <td>{{ $ad->title }}</td>
                            </tr>
                            <tr>
                                <td>Ad Type:</td>
                                <td>{{ $ad->ad_type->name }}</td>
                            </tr>
                            <tr>
                                <td>Category:</td>
                                <td>{{ $ad->category->name }}</td>
                            </tr>
                            <tr>
                                <td>Amout:</td>
                                <td>${{ $ad->ad_type->amount }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card p-4 w-100">
                        <h5>
                            <img class="payment-style" src="{{ asset('frontend/paypal.png') }}" alt="">
                            Paypal Payment
                        </h5>
                        <div class="card-body mt-5 mb-0">
                            <form action="{{ route('paypal.post') }}" method="post">
                                @csrf
                                <input type="hidden" name="price" value="{{ $ad->ad_type->amount }}">
                                <input type="hidden" name="ad_id" value="{{ $ad->id }}">
                                <button type="submit" class="btn btn-info">Pay Now</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-4 w-100">
                        <h5>
                            <img class="payment-style" src="{{ asset('frontend/stripe.png') }}" alt="">
                            Stripe Payment
                        </h5>
                        <div class="card-body mt-5 mb-0">
                            <button class="btn btn-info" onclick="alert('Comming Soon..')">Pay Now</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
