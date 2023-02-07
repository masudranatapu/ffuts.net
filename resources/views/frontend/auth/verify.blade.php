@extends('frontend.layouts_three.app_three')

@push('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush

@section('breadcrumb')
    <ul>
        <li>Jerusalem > </li>
        <li>Set your password for account security</li>
    </ul>
@endsection

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-lg-5 my-5">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Continue without a password</h3>
                </div>
                <div class="card-content">
                    <form action="{{ route('user.signup.success.withoutpassword') }}" method="post" class="login_form border p-3 rounded">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-light">Go Passwordless</button>
                        </div>
                    </form>
                </div>
            </div>
            <h5 class="text-center"> Or </h5>
            <div class="card">
                <div class="card-header text-center">
                    <h3>Change your password</h3>
                </div>
                <div class="card-content">
                    <form action="{{ route('user.signup.success') }}" method="post" class="login_form border p-3 rounded">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <div class="mb-3">
                            <label class="form-label">New Password</label>
                            <input type="password" name="password" class="form-control" required placeholder="New Password">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" required
                                placeholder="Confirm Password">
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-light">Change Password</button>
                        </div>
                    </form>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item" style="font-size: 14px;">Try using a mixture of letters, numbers, and symbols.</li>
                        <li class="list-group-item" style="font-size: 14px;">Avoid using common words, phrases, or personal information.</li>
                    </ol>
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
