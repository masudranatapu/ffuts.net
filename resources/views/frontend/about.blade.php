@extends('frontend.layouts.app', ['nav' => 'yes'])

@section('meta')
@endsection

@push('style')
@endpush

@section('breadcrumb')
    <ul>
        <li>About</li>
    </ul>
@endsection

@section('content')
    <div class="main_template">
        <div class="container">
            <div class="single_product mt-5 mb-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-9">
                        <div class="about_content">
                            <div class="mb-4 text-center">
                                <img src="{{ asset('frontend/images/about.jpg') }}" class="w-100 rounded border shadow-sm"
                                    alt="">
                            </div>
                            <div class="content">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of
                                    classical Latin literature from 45 BC, making it over 2000 years old. Richard
                                    McClintock, a
                                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure
                                    Latin
                                    words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word
                                    in
                                    classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                                    1.10.32
                                    and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by
                                    Cicero,
                                    written in 45 BC. This book is a treatise on the theory of ethics, very popular during
                                    the
                                    Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a
                                    line in
                                    section 1.10.32.</p>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered
                                    alteration in some form, by injected humour, or randomised words which don't look even
                                    slightly
                                    believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                    isn't
                                    anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on
                                    the
                                    Internet tend to repeat predefined chunks as necessary, making this the first true
                                    generator on
                                    the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of
                                    model
                                    sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem
                                    Ipsum
                                    is therefore always free from repetition, injected humour, or non-characteristic words
                                    etc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
