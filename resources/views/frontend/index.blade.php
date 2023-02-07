@extends('frontend.layouts_one.app_one')

@section('meta')
@endsection

@push('style')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
@endpush

@section('content')
<div class="row g-2">
    <div class="col-md-6 col-lg-4">
        <div class="category_heading text-center">
            <h5><a href="#">Community</a></h5>
        </div>
        <div class="row g-1">
            <div class="col-md-6 col-lg-6">
                <div class="mt-2">
                    <ul class="list-group category_list">
                        <li><a href="{{ route('shop') }}"><span class="txt">activities<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">artists<sup class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">childcare<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">classes<sup class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">events<sup class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">general<sup class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">groups<sup class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">local&nbsp;news<sup
                                        class="c"></sup></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="mt-2">
                    <ul class="list-group category_list">
                        <li><a href="{{ route('shop') }}"><span class="txt">lost+found<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">missed connections<sup
                                        class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">musicians<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">pets<sup class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">politics<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">rants &amp; raves<sup
                                        class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">rideshare<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">volunteers<sup class="c"></sup></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="category_heading text-center mt-2">
            <h5><a href="#">Housing</a></h5>
        </div>
        <div class="row g-1">
            <div class="col-md-6 col-lg-6">
                <div class="mt-2">
                    <ul class="list-group category_list">
                        <li><a href="{{ route('shop') }}"><span class="txt">apts / housing<sup
                                        class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">housing swap<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">housing wanted<sup
                                        class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">office / commercial<sup
                                        class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">parking / storage<sup
                                        class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">real estate for sale<sup
                                        class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">rooms / shared<sup
                                        class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">rooms wanted<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">sublets / temporary<sup
                                        class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">vacation rentals<sup
                                        class="c"></sup></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="mt-2">
                    <ul class="list-group category_list">
                        <li><a href="{{ route('shop') }}"><span class="txt">rooms wanted<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">sublets / temporary<sup
                                        class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">apts / housing<sup
                                        class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">housing swap<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">housing wanted<sup
                                        class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">office / commercial<sup
                                        class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">vacation rentals<sup
                                        class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">parking / storage<sup
                                        class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">real estate for sale<sup
                                        class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">rooms / shared<sup
                                        class="c"></sup></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="category_heading text-center mt-2">
            <h5><a href="#">Jobs</a></h5>
        </div>
        <div class="row g-1">
            <div class="col-md-6 col-lg-6">
                <div class="mt-2">
                    <ul class="list-group category_list">
                        <li><a href="{{ route('shop') }}">An item</a></li>
                        <li><a href="{{ route('shop') }}">A second </a></li>
                        <li><a href="{{ route('shop') }}">A third </a></li>
                        <li><a href="{{ route('shop') }}">A fourth </a></li>
                        <li><a href="{{ route('shop') }}">fifth</a></li>
                        <li><a href="{{ route('shop') }}">A third </a></li>
                        <li><a href="{{ route('shop') }}">A fourth </a></li>
                        <li><a href="{{ route('shop') }}">fifth</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="mt-2">
                    <ul class="list-group category_list">
                        <li><a href="{{ route('shop') }}">An item</a></li>
                        <li><a href="{{ route('shop') }}">A second </a></li>
                        <li><a href="{{ route('shop') }}">A third </a></li>
                        <li><a href="{{ route('shop') }}">A fourth </a></li>
                        <li><a href="{{ route('shop') }}">fifth</a></li>
                        <li><a href="{{ route('shop') }}">A third </a></li>
                        <li><a href="{{ route('shop') }}">A fourth </a></li>
                        <li><a href="{{ route('shop') }}">A fourth </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="category_heading text-center">
            <h5><a href="#">Discussion forums</a></h5>
        </div>
        <div class="mt-2">
            <ul class="list-group category_list">
                <li><a href="{{ route('shop') }}">An item</a></li>
                <li><a href="{{ route('shop') }}">A second </a></li>
                <li><a href="{{ route('shop') }}">A third </a></li>
                <li><a href="{{ route('shop') }}">A fourth </a></li>
                <li><a href="{{ route('shop') }}">fifth</a></li>
                <li><a href="{{ route('shop') }}">A third </a></li>
                <li><a href="{{ route('shop') }}">A fourth </a></li>
                <li><a href="{{ route('shop') }}">fifth</a></li>
                <li><a href="{{ route('shop') }}">fifth</a></li>
                <li><a href="{{ route('shop') }}">A third </a></li>
                <li><a href="{{ route('shop') }}">A fourth </a></li>
                <li><a href="{{ route('shop') }}">fifth</a></li>
            </ul>
        </div>
        <div class="category_heading text-center mt-2">
            <h5><a href="#">For sale</a></h5>
        </div>
        <div class="row g-1">
            <div class="col-md-6 col-lg-6">
                <div class="mt-2">
                    <ul class="list-group category_list">
                        <li><a href="{{ route('shop') }}"><span class="txt">antiques<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">appliances<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">arts+crafts<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">atv/utv/sno<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">auto parts<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">aviation<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">baby+kid<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">barter<sup class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">beauty+hlth<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">bike parts<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">bikes<sup class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">boat parts<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">boats<sup class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">books<sup class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">business<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">cars+trucks<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">cds/dvd/vhs<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">cell phones<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">clothes+acc<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">collectibles<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">computer parts<sup
                                        class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">computers<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">electronics<sup class="c"></sup></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="mt-2">
                    <ul class="list-group category_list">
                        <li><a href="{{ route('shop') }}"><span class="txt">antiques<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">appliances<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">arts+crafts<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">atv/utv/sno<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">auto parts<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">aviation<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">baby+kid<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">barter<sup class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">beauty+hlth<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">bike parts<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">bikes<sup class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">boat parts<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">boats<sup class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">books<sup class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">business<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">cars+trucks<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">cds/dvd/vhs<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">cell phones<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">clothes+acc<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">collectibles<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">computer parts<sup
                                        class="c"></sup></span></a></li>
                        <li><a href="{{ route('shop') }}"><span class="txt">computers<sup class="c"></sup></span></a>
                        </li>
                        <li><a href="{{ route('shop') }}"><span class="txt">electronics<sup class="c"></sup></span></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-6 col-lg-4">
        <div class="category_heading text-center">
            <h5><a href="#">Jobs</a></h5>
        </div>
        <div class="mt-2">
            <ul class="list-group category_list">
                <li><a href="{{ route('shop') }}"><span class="txt">accounting+finance<sup class="c"></sup></span></a>
                </li>
                <li><a href="{{ route('shop') }}"><span class="txt">admin / office<sup class="c"></sup></span></a></li>
                <li><a href="{{ route('shop') }}"><span class="txt">arch / engineering<sup class="c"></sup></span></a>
                </li>
                <li><a href="{{ route('shop') }}"><span class="txt">art / media / design<sup class="c"></sup></span></a>
                </li>
                <li><a href="{{ route('shop') }}"><span class="txt">biotech / science<sup class="c"></sup></span></a>
                </li>
                <li><a href="{{ route('shop') }}"><span class="txt">business / mgmt<sup class="c"></sup></span></a></li>
                <li><a href="{{ route('shop') }}"><span class="txt">customer service<sup class="c"></sup></span></a>
                </li>
                <li><a href="{{ route('shop') }}"><span class="txt">education<sup class="c"></sup></span></a></li>
                <li><a href="{{ route('shop') }}"><span class="txt">etc / misc<sup class="c"></sup></span></a></li>
                <li><a href="{{ route('shop') }}"><span class="txt">food / bev / hosp<sup class="c"></sup></span></a>
                </li>
                <li><a href="{{ route('shop') }}"><span class="txt">general labor<sup class="c"></sup></span></a></li>
                <li><a href="{{ route('shop') }}"><span class="txt">government<sup class="c"></sup></span></a></li>
                <li><a href="{{ route('shop') }}"><span class="txt">human resources<sup class="c"></sup></span></a></li>
                <li><a href="{{ route('shop') }}"><span class="txt">legal / paralegal<sup class="c"></sup></span></a>
                </li>
                <li><a href="{{ route('shop') }}"><span class="txt">manufacturing<sup class="c"></sup></span></a></li>
                <li><a href="{{ route('shop') }}"><span class="txt">marketing / pr / ad<sup class="c"></sup></span></a>
                </li>
                <li><a href="{{ route('shop') }}"><span class="txt">medical / health<sup class="c"></sup></span></a>
                </li>
                <li><a href="{{ route('shop') }}"><span class="txt">nonprofit sector<sup class="c"></sup></span></a>
                </li>
                <li><a href="{{ route('shop') }}"><span class="txt">real estate<sup class="c"></sup></span></a></li>
                <li><a href="{{ route('shop') }}"><span class="txt">retail / wholesale<sup class="c"></sup></span></a>
                </li>
                <li><a href="{{ route('shop') }}"><span class="txt">sales / biz dev<sup class="c"></sup></span></a></li>
                <li><a href="{{ route('shop') }}"><span class="txt">salon / spa / fitness<sup
                                class="c"></sup></span></a></li>
                <li><a href="{{ route('shop') }}"><span class="txt">security<sup class="c"></sup></span></a></li>
                <li><a href="{{ route('shop') }}"><span class="txt">skilled trade / craft<sup
                                class="c"></sup></span></a></li>
                <li><a href="{{ route('shop') }}"><span class="txt">software / qa / dba<sup class="c"></sup></span></a>
                </li>
                <li><a href="{{ route('shop') }}"><span class="txt">systems / network<sup class="c"></sup></span></a>
                </li>
                <li><a href="{{ route('shop') }}"><span class="txt">technical support<sup class="c"></sup></span></a>
                </li>
                <li><a href="{{ route('shop') }}"><span class="txt">transport<sup class="c"></sup></span></a></li>
                <li><a href="{{ route('shop') }}"><span class="txt">tv / film / video<sup class="c"></sup></span></a>
                </li>
                <li><a href="{{ route('shop') }}"><span class="txt">web / info design<sup class="c"></sup></span></a>
                </li>
                <li><a href="{{ route('shop') }}"><span class="txt">writing / editing<sup class="c"></sup></span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('mobile_content')
<form action="#" method="post" class="mb-3 mt-3 p-2">
    <div class="input-group">
        <input type="text" name="search" id="search" class="form-control" placeholder="Search..." required>
        <button type="submit" class="text-input-group"><i class="la la-search"></i></button>
    </div>
</form>
<div class="accordion_item mb-4">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading_1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse_1" aria-expanded="false" aria-controls="collapse_1">
                    For Sale
                </button>
            </h2>
            <div id="collapse_1" class="accordion-collapse collapse" aria-labelledby="heading_1"
                data-bs-parent="#accordionExample">
                <div class="accordion_body">
                    <ul>
                        <li><a href="{{ route('shop') }}">all for sale</a></li>
                        <li><a href="{{ route('shop') }}">antiques</a></li>
                        <li><a href="{{ route('shop') }}">appliances</a></li>
                        <li><a href="{{ route('shop') }}">arts+crafts</a></li>
                        <li><a href="{{ route('shop') }}">atv/utv/sno</a></li>
                        <li><a href="{{ route('shop') }}">aviation</a></li>
                        <li><a href="{{ route('shop') }}">barter</a></li>
                        <li><a href="{{ route('shop') }}">beauty</a></li>
                        <li><a href="{{ route('shop') }}">bikes</a></li>
                        <li><a href="{{ route('shop') }}">boat parts</a></li>
                        <li><a href="{{ route('shop') }}">books</a></li>
                        <li><a href="{{ route('shop') }}">business</a></li>
                        <li><a href="{{ route('shop') }}">computer</a></li>
                        <li><a href="{{ route('shop') }}">collectibles</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading_2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse_2" aria-expanded="false" aria-controls="collapse_2">
                    Jobs
                </button>
            </h2>
            <div id="collapse_2" class="accordion-collapse collapse" aria-labelledby="heading_2"
                data-bs-parent="#accordionExample">
                <div class="accordion_body">
                    <ul>
                        <li><a href="{{ route('shop') }}">all for sale</a></li>
                        <li><a href="{{ route('shop') }}">antiques</a></li>
                        <li><a href="{{ route('shop') }}">appliances</a></li>
                        <li><a href="{{ route('shop') }}">arts+crafts</a></li>
                        <li><a href="{{ route('shop') }}">atv/utv/sno</a></li>
                        <li><a href="{{ route('shop') }}">aviation</a></li>
                        <li><a href="{{ route('shop') }}">barter</a></li>
                        <li><a href="{{ route('shop') }}">beauty</a></li>
                        <li><a href="{{ route('shop') }}">bikes</a></li>
                        <li><a href="{{ route('shop') }}">boat parts</a></li>
                        <li><a href="{{ route('shop') }}">books</a></li>
                        <li><a href="{{ route('shop') }}">business</a></li>
                        <li><a href="{{ route('shop') }}">computer</a></li>
                        <li><a href="{{ route('shop') }}">collectibles</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading_3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse_3" aria-expanded="false" aria-controls="collapse_3">
                    Housing
                </button>
            </h2>
            <div id="collapse_3" class="accordion-collapse collapse" aria-labelledby="heading_3"
                data-bs-parent="#accordionExample">
                <div class="accordion_body">
                    <ul>
                        <li><a href="{{ route('shop') }}">all for sale</a></li>
                        <li><a href="{{ route('shop') }}">antiques</a></li>
                        <li><a href="{{ route('shop') }}">appliances</a></li>
                        <li><a href="{{ route('shop') }}">arts+crafts</a></li>
                        <li><a href="{{ route('shop') }}">atv/utv/sno</a></li>
                        <li><a href="{{ route('shop') }}">aviation</a></li>
                        <li><a href="{{ route('shop') }}">barter</a></li>
                        <li><a href="{{ route('shop') }}">beauty</a></li>
                        <li><a href="{{ route('shop') }}">bikes</a></li>
                        <li><a href="{{ route('shop') }}">boat parts</a></li>
                        <li><a href="{{ route('shop') }}">books</a></li>
                        <li><a href="{{ route('shop') }}">business</a></li>
                        <li><a href="{{ route('shop') }}">computer</a></li>
                        <li><a href="{{ route('shop') }}">collectibles</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading_4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">
                    Community
                </button>
            </h2>
            <div id="collapse_4" class="accordion-collapse collapse" aria-labelledby="heading_4"
                data-bs-parent="#accordionExample">
                <div class="accordion_body">
                    <ul>
                        <li><a href="{{ route('shop') }}">all for sale</a></li>
                        <li><a href="{{ route('shop') }}">antiques</a></li>
                        <li><a href="{{ route('shop') }}">appliances</a></li>
                        <li><a href="{{ route('shop') }}">arts+crafts</a></li>
                        <li><a href="{{ route('shop') }}">atv/utv/sno</a></li>
                        <li><a href="{{ route('shop') }}">aviation</a></li>
                        <li><a href="{{ route('shop') }}">barter</a></li>
                        <li><a href="{{ route('shop') }}">beauty</a></li>
                        <li><a href="{{ route('shop') }}">bikes</a></li>
                        <li><a href="{{ route('shop') }}">boat parts</a></li>
                        <li><a href="{{ route('shop') }}">books</a></li>
                        <li><a href="{{ route('shop') }}">business</a></li>
                        <li><a href="{{ route('shop') }}">computer</a></li>
                        <li><a href="{{ route('shop') }}">collectibles</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading_5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse_5" aria-expanded="false" aria-controls="collapse_5">
                    Services
                </button>
            </h2>
            <div id="collapse_5" class="accordion-collapse collapse" aria-labelledby="heading_5"
                data-bs-parent="#accordionExample">
                <div class="accordion_body">
                    <ul>
                        <li><a href="{{ route('shop') }}">all for sale</a></li>
                        <li><a href="{{ route('shop') }}">antiques</a></li>
                        <li><a href="{{ route('shop') }}">appliances</a></li>
                        <li><a href="{{ route('shop') }}">arts+crafts</a></li>
                        <li><a href="{{ route('shop') }}">atv/utv/sno</a></li>
                        <li><a href="{{ route('shop') }}">aviation</a></li>
                        <li><a href="{{ route('shop') }}">barter</a></li>
                        <li><a href="{{ route('shop') }}">beauty</a></li>
                        <li><a href="{{ route('shop') }}">bikes</a></li>
                        <li><a href="{{ route('shop') }}">boat parts</a></li>
                        <li><a href="{{ route('shop') }}">books</a></li>
                        <li><a href="{{ route('shop') }}">business</a></li>
                        <li><a href="{{ route('shop') }}">computer</a></li>
                        <li><a href="{{ route('shop') }}">collectibles</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $(function() {
            $("#datepicker").datepicker();
        });
</script>
@endpush