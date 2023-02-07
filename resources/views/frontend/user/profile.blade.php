@extends('frontend.layouts_three.app_three')

@push('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush

@section('breadcrumb')
    <ul>
        <li>Jerusalem > </li>
        <li>User Profile > </li>
        <li>{{ Auth::user()->name }}</li>
    </ul>
@endsection

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card my-5" style="width: 18rem;">
                <img src="{{ asset(Auth::user()->image) }}" class="card-img-top" alt="">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name : {{ Auth::user()->name ?? 'N/L' }}</li>
                    <li class="list-group-item">Email : {{ Auth::user()->email }}</li>
                </ul>
                <div class="card-body">
                    <a href="javascript:;" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('sign_out') }}
                    </a>
                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
@endpush
