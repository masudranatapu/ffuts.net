@extends('frontend.layouts_three.app_three')

@push('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush

@section('breadcrumb')
    <ul>
        <li>Jerusalem > </li>
        <li>Login & Register</li>
    </ul>
@endsection

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-lg-5 my-5">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Log in</h3>
                </div>
                <div class="card-content">
                    <form action="{{ route('user.signin') }}" method="post" class="login_form border p-3 rounded">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" id="email" class="form-control" required
                                placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required
                                placeholder="Password">
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-light">Login</button>
                        </div>
                    </form>
                </div>
            </div>

            <hr>

            <div class="card">
                <div class="card-header text-center">
                    <h3>Create an account</h3>
                </div>
                <div class="card-content">
                    <form action="{{ route('user.singup') }}" method="post" class="login_form border p-3 rounded">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" required placeholder="Email Address">
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-light">Register</button>
                        </div>
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
