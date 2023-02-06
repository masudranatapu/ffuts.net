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
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-lg-5 my-5">
            <form action="#" method="post" class="login_form border p-3 rounded">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-light">Create Account</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('script')
@endpush
