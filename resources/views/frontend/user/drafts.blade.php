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
    <li>Jerusalem > </li>
    <li>User Profile > </li>
    <li>{{ $user->name }}</li>
</ul>
@endsection

@section('content')
<div class="main_template mt-5">
    <div class="container-fluid">


        <div class="user_dashboard mb-4">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="posting-tab" data-bs-toggle="tab" data-bs-target="#posting-tab-pane"
                        type="button" role="tab" aria-controls="posting-tab-pane" aria-selected="true"><a
                            href="{{ route('user.profile') }}">Posting</a></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="drafts-tab" data-bs-toggle="tab"
                        data-bs-target="#drafts-tab-pane" type="button" role="tab" aria-controls="drafts-tab-pane"
                        aria-selected="false"><a href="{{ route('user.drafts') }}">Drafts</a></button>
                </li>
                {{-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="searches-tab" data-bs-toggle="tab" data-bs-target="#searches-tab-pane"
                        type="button" role="tab" aria-controls="searches-tab-pane" aria-selected="false"><a
                            href="{{ route('user.search') }}">Searches</a></button>
                </li> --}}
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="setting-tab" data-bs-toggle="tab" data-bs-target="#setting-tab-pane"
                        type="button" role="tab" aria-controls="setting-tab-pane" aria-selected="false"><a
                            href="{{ route('user.setting') }}">Settings</a></button>
                </li>
            </ul>
        </div>
        <div class="user_dashboard_wrap">
            <div class="table-responsive">
                <table class="table table-hover" style="min-width: 950px;">
                    <thead>
                        <tr>
                            <th width="40%">Drafts</th>
                            <th width="10%">Category</th>
                            <th width="10%">Area</th>
                            <th width="10%">Date</th>
                            <th width="10%">Status</th>
                            <th width="20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ads as $ad)
                            <tr>
                                <td>
                                    <a href="{{route('frontend.details', $ad->slug)}}"> {{$ad->title}}</a>
                                </td>
                                <td>
                                    {{$ad->category->name}}
                                </td>
                                <td>
                                    {{$ad->city}} {{ isset($ad->countries->name) ? ', ' .ucfirst(strtolower($ad->countries->name)) : ''}}
                                </td>
                                <td>
                                    {{date('d M, Y')}}
                                </td>
                                <td>
                                    <a href="{{ route('user.post.statusUpdate', [$ad->id, 'active']) }}"  class="btn btn-sm btn-danger">Published</a>
                                </td>
                                <td>
                                   <a href="{{route('frontend.details', $ad->slug)}}" class="btn btn-sm btn-success">View</a>
                                    <a href="#" onclick="alert('Comming soon..')" class="btn btn-sm btn-secondary">Edit</a>
                                    <a href="{{ route('user.post.delete', $ad->id) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

