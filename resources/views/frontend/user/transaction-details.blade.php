@extends('frontend.layouts.app', ['nav' => 'yes'])

@push('style')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<style>
    td {
        border: 1px solid #EEE !important;
        vertical-align: middle;
    }

    tr th {
        border: 1px solid #cdc9c9 !important;
        background: #d8d8d8 !important;
    }
</style>
@endpush

@section('breadcrumb')
<ul>
    <li>User Transaction Details > </li>
    {{-- <li>{{ $user->name }}</li> --}}
</ul>
@endsection

@section('content')
<div class="main_template mt-5">
    <div class="container-fluid">


        <div class="user_dashboard mb-4">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="posting-tab" data-bs-toggle="tab"
                        data-bs-target="#posting-tab-pane" type="button" role="tab" aria-controls="posting-tab-pane"
                        aria-selected="true"><a href="{{ route('user.profile') }}">Posting</a></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="drafts-tab" data-bs-toggle="tab" data-bs-target="#drafts-tab-pane"
                        type="button" role="tab" aria-controls="drafts-tab-pane" aria-selected="false"><a
                            href="{{ route('user.drafts') }}">Drafts</a></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="searches-tab" data-bs-toggle="tab" data-bs-target="#searches-tab-pane"
                        type="button" role="tab" aria-controls="searches-tab-pane" aria-selected="false"><a
                            href="{{ route('user.favourite') }}">Favourites</a></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="searches-tab" data-bs-toggle="tab" data-bs-target="#searches-tab-pane"
                        type="button" role="tab" aria-controls="searches-tab-pane" aria-selected="false"><a
                            href="{{ route('user.transaction') }}">Transaction</a></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="setting-tab" data-bs-toggle="tab" data-bs-target="#setting-tab-pane"
                        type="button" role="tab" aria-controls="setting-tab-pane" aria-selected="false"><a
                            href="{{ route('user.setting') }}">Settings</a></button>
                </li>
            </ul>
        </div>
        <div class="user_dashboard_wrap">
            <div class="row m-2">
                       
                <div class="col-md-12 ">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                        cellspacing="0" width="100%">
                        <tbody>
                            <tr class="mb-5">
                                <th width="20%">{{ __('Customer Name') }}</th>
                                <td width="80%">{{ $transactionDetails->customer->username }}</td>
                            </tr>
                            <tr class="mb-5">
                                <th width="20%">{{ __('Posting Title') }}</th>
                                <td width="80%">{{ $transactionDetails->ad->title }}</td>
                            </tr>
                            <tr class="mb-5">
                                <th width="20%">{{ __('Add Type') }}</th>
                                <td width="80%">{{ $transactionDetails->ad->ad_type->name }}</td>
                            </tr>
                            <tr class="mb-5">
                                <th width="20%">{{ __('Category') }}</th>
                                <td width="80%">{{ $transactionDetails->ad->category->name }}</td>
                            </tr>
                            <tr class="mb-5">
                                <th width="20%">{{ __('Sub Category') }}</th>
                                <td width="80%">{{ $transactionDetails->ad->subCategory->name }}</td>
                            </tr>
                            <tr class="mb-5">
                                <th width="20%">{{ __('Order ID') }}</th>
                                <td width="80%">{{ $transactionDetails->order_id }}</td>
                            </tr>
                            <tr class="mb-5">
                                <th width="20%">{{ __('Transaction ID') }}</th>
                                <td width="80%">{{ $transactionDetails->transaction_id }}</td>
                            </tr>
                            <tr class="mb-5">
                                <th width="20%">{{ __('Amount') }}</th>
                                <td width="80%">{{ $transactionDetails->currency_symbol }}{{ $transactionDetails->amount }}</td>
                            </tr>
                            <tr class="mb-5">
                                <th width="20%">{{ __('Payment Method') }}</th>
                                <td width="80%">{{ $transactionDetails->payment_provider }}</td>
                            </tr>
                            <tr class="mb-5">
                                <th width="20%">{{ __('Payment Status') }}</th>
                                <td width="80%">
                                    @if($transactionDetails->payment_status == 'paid')
                                        <span class="badge bg-success">Paid</span>
                                    @else
                                        <span class="badge bg-danger">Uppaid</span>
                                    @endif
                                </td>
                            </tr>
                            <tr class="mb-5">
                                <th width="20%">{{ __('Transaction Date') }}</th>
                                <td width="80%">{{ date('d M Y',strtotime($transactionDetails->created_at)) }}</td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
       @include('frontend.layouts.footer')

@endsection

