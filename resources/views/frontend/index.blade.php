@extends('frontend.layouts.app',['nav'=>'no'])

@section('meta')
@endsection

@push('style')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
@endpush

<div class="template_wrap mt-1 d-none d-md-block">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-3">
                <div class="sidebar_left overflow-hidden">
                    <div class="heading1 text-center p-3">
                        <h5><a href="index.html"><img src="{{ asset('frontend/images/logo2.jpg') }}" width="124" alt="logo"></a>
                        </h5>
                        <ul class="list-group pt-3">
                            <li class="custom-list-style mb-2">
                                <a href="create-post.html">Create a posting</a>
                            </li>
                            <li class="mt-1 mb-3">
                                <a href="#">My Account</a>
                            </li>
                        </ul>
                        <div class="search-style mb-4">
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input type="text" name="search" id="search" class="form-control"
                                        placeholder="Search..." required>
                                    <button type="submit" class="text-input-group"><i
                                            class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="custom-calender mb-3">
                            <h5><a href="#">event calendar</a></h5>
                        </div>
                        <div class="calender-style">
                            <table class="table-condensed table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S</th>
                                        <th>M</th>
                                        <th>T</th>
                                        <th>W</th>
                                        <th>T</th>
                                        <th>F</th>
                                        <th>S</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="muted">29</td>
                                        <td class="muted">30</td>
                                        <td class="muted">31</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>13</td>
                                        <td>14</td>
                                        <td>15</td>
                                        <td>16</td>
                                        <td>17</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td class="btn-primary"><strong>20</strong></td>
                                        <td>21</td>
                                        <td>22</td>
                                        <td>23</td>
                                        <td>24</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>27</td>
                                        <td>28</td>
                                        <td>29</td>
                                        <td class="muted">1</td>
                                        <td class="muted">2</td>
                                        <td class="muted">3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-5 list-style1 mb-3">
                            <ul class="list-group">
                                <li class="list-item custom-list-style1">
                                    <a href="shop.html">hjælp. faq, misbrug, juridisk</a>
                                </li>
                                <li class="custom-list-style1">
                                    <a href="shop.html">undgå svindel og bedrag </a>
                                </li>
                                <li class="custom-list-style1">
                                    <a href="shop.html">personlige sikkerhedsråd </a>
                                </li>
                                <li class="custom-list-style1">
                                    <a href="shop.html">anvendelsesvilkår </a>
                                </li>
                                <li class="custom-list-style1">
                                    <a href="shop.html">datapolitik</a>
                                </li>
                                <li class="custom-list-style1">
                                    <a href="shop.html">systemstatus </a>
                                </li>
                            </ul>
                        </div>
                        <div class="list-style1">
                            <ul class="list-group ">
                                <li class="list-item custom-list-style1">
                                    <a href="shop.html">om craigslist </a>
                                </li>
                                <li class="custom-list-style1">
                                    <a href="shop.html">craigslist åben kilde </a>
                                </li>
                                <li class="custom-list-style1">
                                    <a href="shop.html">craigslist blog </a>
                                </li>
                                <li class="custom-list-style1">
                                    <a href="shop.html">bedste-fra-craigslist </a>
                                </li>
                                <li class="custom-list-style1">
                                    <a href="shop.html">"craigslist joe" </a>
                                </li>
                                <li class="custom-list-style1">
                                    <a href="shop.html">craig newmark philanthropies </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="heading2 text-center py-3">
                    <h5><a href="index.html">Ffuts.net</a></h5>
                </div>
                <div class="main_body">
                    <div class="row g-2">
                        <div class="col-md-6 col-lg-4">
                            <div class="category_heading text-center">
                                <h5>community</h5>
                            </div>
                            <div class="row g-1">
                                <div class="col-md-6 col-lg-6">
                                    <div class="mt-2">
                                        <ul class="list-group category_list">
                                            <li><a href="shop.html">An item</a></li>
                                            <li><a href="shop.html">A second</a>
                                            </li>
                                            <li><a href="shop.html">A third</a>
                                            </li>
                                            <li><a href="shop.html">A fourth</a>
                                            </li>
                                            <li><a href="shop.html">And a fifth</a>
                                            </li>
                                            <li><a href="shop.html">A third</a>
                                            </li>
                                            <li><a href="shop.html">A fourth</a>
                                            </li>
                                            <li><a href="shop.html">And a fifth</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="mt-2">
                                        <ul class="list-group category_list">
                                            <li><a href="shop.html">An item</a></li>
                                            <li><a href="shop.html">A second </a>
                                            </li>
                                            <li><a href="shop.html">A third </a>
                                            </li>
                                            <li><a href="shop.html">A fourth </a>
                                            </li>
                                            <li><a href="shop.html">And a fifth</a>
                                            </li>
                                            <li><a href="shop.html">A third </a>
                                            </li>
                                            <li><a href="shop.html">A fourth</a>
                                            </li>
                                            <li><a href="shop.html">And a fifth</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="category_heading text-center mt-2">
                                <h5>community</h5>
                            </div>
                            <div class="row g-1">
                                <div class="col-md-6 col-lg-6">
                                    <div class="mt-2">
                                        <ul class="list-group category_list">
                                            <li><a href="shop.html">An item</a></li>
                                            <li><a href="shop.html">A second </a>
                                            </li>
                                            <li><a href="shop.html">A third </a>
                                            </li>
                                            <li><a href="shop.html">A fourth </a>
                                            </li>
                                            <li><a href="shop.html">And a fifth</a>
                                            </li>
                                            <li><a href="shop.html">A third </a>
                                            </li>
                                            <li><a href="shop.html">A fourth </a>
                                            </li>
                                            <li><a href="shop.html">And a fifth</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="mt-2">
                                        <ul class="list-group category_list">
                                            <li><a href="shop.html">An item</a></li>
                                            <li><a href="shop.html">A second</a>
                                            </li>
                                            <li><a href="shop.html">A third </a>
                                            </li>
                                            <li><a href="shop.html">A fourth </a>
                                            </li>
                                            <li><a href="shop.html">And a fifth</a>
                                            </li>
                                            <li><a href="shop.html">A third </a>
                                            </li>
                                            <li><a href="shop.html">A fourth </a>
                                            </li>
                                            <li><a href="shop.html">And a fifth</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="category_heading text-center mt-2">
                                <h5>community</h5>
                            </div>
                            <div class="row g-1">
                                <div class="col-md-6 col-lg-6">
                                    <div class="mt-2">
                                        <ul class="list-group category_list">
                                            <li><a href="shop.html">An item</a></li>
                                            <li><a href="shop.html">A second </a></li>
                                            <li><a href="shop.html">A third </a></li>
                                            <li><a href="shop.html">A fourth </a></li>
                                            <li><a href="shop.html">fifth</a></li>
                                            <li><a href="shop.html">A third </a></li>
                                            <li><a href="shop.html">A fourth </a></li>
                                            <li><a href="shop.html">fifth</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="mt-2">
                                        <ul class="list-group category_list">
                                            <li><a href="shop.html">An item</a></li>
                                            <li><a href="shop.html">A second </a></li>
                                            <li><a href="shop.html">A third </a></li>
                                            <li><a href="shop.html">A fourth </a></li>
                                            <li><a href="shop.html">fifth</a></li>
                                            <li><a href="shop.html">A third </a></li>
                                            <li><a href="shop.html">A fourth </a></li>
                                            <li><a href="shop.html">A fourth </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="category_heading text-center">
                                <h5>community</h5>
                            </div>
                            <div class="mt-2">
                                <ul class="list-group category_list">
                                    <li><a href="shop.html">An item</a></li>
                                    <li><a href="shop.html">A second </a></li>
                                    <li><a href="shop.html">A third </a></li>
                                    <li><a href="shop.html">A fourth </a></li>
                                    <li><a href="shop.html">fifth</a></li>
                                    <li><a href="shop.html">A third </a></li>
                                    <li><a href="shop.html">A fourth </a></li>
                                    <li><a href="shop.html">fifth</a></li>
                                    <li><a href="shop.html">fifth</a></li>
                                    <li><a href="shop.html">A third </a></li>
                                    <li><a href="shop.html">A fourth </a></li>
                                    <li><a href="shop.html">fifth</a></li>
                                </ul>
                            </div>
                            <div class="category_heading text-center mt-2">
                                <h5>community</h5>
                            </div>
                            <div class="row g-1">
                                <div class="col-md-6 col-lg-6">
                                    <div class="mt-2">
                                        <ul class="list-group category_list">
                                            <li><a href="shop.html">An item</a></li>
                                            <li><a href="shop.html">A second </a></li>
                                            <li><a href="shop.html">A third </a></li>
                                            <li><a href="shop.html">A fourth </a></li>
                                            <li><a href="shop.html">And a fifth</a></li>
                                            <li><a href="shop.html">A third </a></li>
                                            <li><a href="shop.html">A fourth </a></li>
                                            <li><a href="shop.html">And a fifth</a></li>
                                            <li><a href="shop.html">And a fifth</a></li>
                                            <li><a href="shop.html">A third </a></li>
                                            <li><a href="shop.html">A fourth </a></li>
                                            <li><a href="shop.html">And a fifth</a></li>
                                            <li><a href="shop.html">An item</a></li>
                                            <li><a href="shop.html">A second </a></li>
                                            <li><a href="shop.html">A third </a></li>
                                            <li><a href="shop.html">A fourth </a></li>
                                            <li><a href="shop.html">And a fifth</a></li>
                                            <li><a href="shop.html">A third</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="mt-2">
                                        <ul class="list-group category_list">
                                            <li><a href="shop.html">An item</a></li>
                                            <li><a href="shop.html">A second </a></li>
                                            <li><a href="shop.html">A third </a></li>
                                            <li><a href="shop.html">A fourth </a></li>
                                            <li><a href="shop.html">And a fifth</a></li>
                                            <li><a href="shop.html">A third </a></li>
                                            <li><a href="shop.html">A fourth </a></li>
                                            <li><a href="shop.html">And a fifth</a></li>
                                            <li><a href="shop.html">And a fifth</a></li>
                                            <li><a href="shop.html">A third</a></li>
                                            <li><a href="shop.html">A fourth</a></li>
                                            <li><a href="shop.html">And a fifth</a></li>
                                            <li><a href="shop.html">An item</a></li>
                                            <li><a href="shop.html">A second</a></li>
                                            <li><a href="shop.html">A third</a></li>
                                            <li><a href="shop.html">A fourth</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="category_heading text-center">
                                <h5>community</h5>
                            </div>
                            <div class="mt-2">
                                <ul class="list-group category_list">
                                    <li><a href="shop.html">An item</a></li>
                                    <li><a href="shop.html">A second </a></li>
                                    <li><a href="shop.html">A third </a></li>
                                    <li><a href="shop.html">A fourth </a></li>
                                    <li><a href="shop.html">And a fifth</a></li>
                                    <li><a href="shop.html">A third </a></li>
                                    <li><a href="shop.html">A fourth </a></li>
                                    <li><a href="shop.html">And a fifth</a></li>
                                    <li><a href="shop.html">And a fifth</a></li>
                                    <li><a href="shop.html">A third </a></li>
                                    <li><a href="shop.html">A fourth </a></li>
                                    <li><a href="shop.html">And a fifth</a></li>
                                    <li><a href="shop.html">An item</a></li>
                                    <li><a href="shop.html">A second </a></li>
                                    <li><a href="shop.html">A third </a></li>
                                    <li><a href="shop.html">A fourth </a></li>
                                    <li><a href="shop.html">And a fifth</a></li>
                                    <li><a href="shop.html">A third </a></li>
                                    <li><a href="shop.html">A fourth </a></li>
                                    <li><a href="shop.html">And a fifth</a></li>
                                    <li><a href="shop.html">And a fifth</a></li>
                                    <li><a href="shop.html">A third </a></li>
                                    <li><a href="shop.html">A fourth </a></li>
                                    <li><a href="shop.html">And a fifth</a></li>
                                    <li><a href="shop.html">An item</a></li>
                                    <li><a href="shop.html">A second </a></li>
                                    <li><a href="shop.html">A third </a></li>
                                    <li><a href="shop.html">A fourth </a></li>
                                    <li><a href="shop.html">And a fifth</a></li>
                                    <li><a href="shop.html">And a fifth</a></li>
                                    <li><a href="shop.html">A third </a></li>
                                    <li><a href="shop.html">A fourth </a></li>
                                    <li><a href="shop.html">And a fifth</a></li>
                                    <li><a href="shop.html">An item</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="sidebar_right">
                    <div class="heading3 text-center">
                        <select name="language" id="language"
                            class="form-control form-select language_dropdown mb-3">
                            <option value="">English</option>
                            <option value="">Hindi</option>
                            <option value="">Latvian</option>
                            <option value="">Polish</option>
                            <option value="">Tamil</option>
                            <option value="">Danish</option>
                            <option value="">Albanian</option>
                            <option value="">Luganda</option>
                        </select>
                        <ul class="list-group mb-3">
                            <li>
                                <a href="shop.html">English </a>
                            </li>
                            <li>
                                <a href="shop.html">mellemφsten</a>
                            </li>
                        </ul>
                        <div class="mt-2 list-syle-hover">
                            <ul class="list-group ">
                                <li><a href="shop.html">An item</a></li>
                                <li> <a href="shop.html">A second</a></li>
                                <li> <a href="shop.html">A second</a></li>
                                <li> <a href="shop.html">A second</a></li>
                            </ul>
                        </div>
                        <div class="mt-2 list-syle-hover">
                            <ul class="list-group ">
                                <li><a href="shop.html">An item</a></li>
                                <li> <a href="shop.html">A second</a></li>
                                <li> <a href="shop.html">A second</a></li>
                                <li> <a href="shop.html">A second</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>




<!-- ------------------ Mobile View Desing Start ------------------ -->
<div class="mobile-view d-block d-md-none">
    <div class="mobile_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-5">
                    <div class="mobile_heade_left">
                        <div class="site_logo">
                            <a class="header_logo" name="logoLink" href="index.html">CL</a>
                            <a href="index.html">Jerusalem</a>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="mobile_heade_right float-end">
                        <ul>
                            <li><a href="shop.html">Post</a></li>
                            <li><a href="shop.html">Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="mobile_body">
            <form action="#" method="post" class="mb-3 mt-3 p-2">
                <div class="input-group">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Search..."
                        required>
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
                                    <li><a href="shop.html">all for sale</a></li>
                                    <li><a href="shop.html">antiques</a></li>
                                    <li><a href="shop.html">appliances</a></li>
                                    <li><a href="shop.html">arts+crafts</a></li>
                                    <li><a href="shop.html">atv/utv/sno</a></li>
                                    <li><a href="shop.html">aviation</a></li>
                                    <li><a href="shop.html">barter</a></li>
                                    <li><a href="shop.html">beauty</a></li>
                                    <li><a href="shop.html">bikes</a></li>
                                    <li><a href="shop.html">boat parts</a></li>
                                    <li><a href="shop.html">books</a></li>
                                    <li><a href="shop.html">business</a></li>
                                    <li><a href="shop.html">computer</a></li>
                                    <li><a href="shop.html">collectibles</a></li>
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
                                    <li><a href="shop.html">all for sale</a></li>
                                    <li><a href="shop.html">antiques</a></li>
                                    <li><a href="shop.html">appliances</a></li>
                                    <li><a href="shop.html">arts+crafts</a></li>
                                    <li><a href="shop.html">atv/utv/sno</a></li>
                                    <li><a href="shop.html">aviation</a></li>
                                    <li><a href="shop.html">barter</a></li>
                                    <li><a href="shop.html">beauty</a></li>
                                    <li><a href="shop.html">bikes</a></li>
                                    <li><a href="shop.html">boat parts</a></li>
                                    <li><a href="shop.html">books</a></li>
                                    <li><a href="shop.html">business</a></li>
                                    <li><a href="shop.html">computer</a></li>
                                    <li><a href="shop.html">collectibles</a></li>
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
                                    <li><a href="shop.html">all for sale</a></li>
                                    <li><a href="shop.html">antiques</a></li>
                                    <li><a href="shop.html">appliances</a></li>
                                    <li><a href="shop.html">arts+crafts</a></li>
                                    <li><a href="shop.html">atv/utv/sno</a></li>
                                    <li><a href="shop.html">aviation</a></li>
                                    <li><a href="shop.html">barter</a></li>
                                    <li><a href="shop.html">beauty</a></li>
                                    <li><a href="shop.html">bikes</a></li>
                                    <li><a href="shop.html">boat parts</a></li>
                                    <li><a href="shop.html">books</a></li>
                                    <li><a href="shop.html">business</a></li>
                                    <li><a href="shop.html">computer</a></li>
                                    <li><a href="shop.html">collectibles</a></li>
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
                                    <li><a href="shop.html">all for sale</a></li>
                                    <li><a href="shop.html">antiques</a></li>
                                    <li><a href="shop.html">appliances</a></li>
                                    <li><a href="shop.html">arts+crafts</a></li>
                                    <li><a href="shop.html">atv/utv/sno</a></li>
                                    <li><a href="shop.html">aviation</a></li>
                                    <li><a href="shop.html">barter</a></li>
                                    <li><a href="shop.html">beauty</a></li>
                                    <li><a href="shop.html">bikes</a></li>
                                    <li><a href="shop.html">boat parts</a></li>
                                    <li><a href="shop.html">books</a></li>
                                    <li><a href="shop.html">business</a></li>
                                    <li><a href="shop.html">computer</a></li>
                                    <li><a href="shop.html">collectibles</a></li>
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
                                    <li><a href="shop.html">all for sale</a></li>
                                    <li><a href="shop.html">antiques</a></li>
                                    <li><a href="shop.html">appliances</a></li>
                                    <li><a href="shop.html">arts+crafts</a></li>
                                    <li><a href="shop.html">atv/utv/sno</a></li>
                                    <li><a href="shop.html">aviation</a></li>
                                    <li><a href="shop.html">barter</a></li>
                                    <li><a href="shop.html">beauty</a></li>
                                    <li><a href="shop.html">bikes</a></li>
                                    <li><a href="shop.html">boat parts</a></li>
                                    <li><a href="shop.html">books</a></li>
                                    <li><a href="shop.html">business</a></li>
                                    <li><a href="shop.html">computer</a></li>
                                    <li><a href="shop.html">collectibles</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center footer_menu">
        <div class="container">
            <div class="p-2">
                <ul>
                    <li class="list-item text-white">
                        © 2023 craigslist
                    </li>
                    <li> <a href="#">hjælp |</a></li>
                    <li><a href="#">sikkerhed |</a></li>
                    <li><a href="#">privatliv |</a></li>
                    <li><a href="#"> feedback |</a></li>
                    <li><a href="#">vilkår |</a></li>
                    <li><a href="#">vedr |</a></li>
                    <li><a href="#">vedr |</a></li>
                    <li><a href="#">vedr |</a></li>
                </ul>
            </div>
        </div>
    </footer>

</div>
<!-- ------------------ Mobile View Desing End ------------------ -->


@push('script')
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $(function() {
            $("#datepicker").datepicker();
        });
</script>
@endpush
