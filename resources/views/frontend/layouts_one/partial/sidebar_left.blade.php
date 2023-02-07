<div class="heading1 text-center p-3">
    <h5>
        <a href="{{ route('index') }}">
            <img src="{{ asset('frontend/images/logo.jpg') }}" width="124"alt="logo">
        </a>
    </h5>
    <ul class="list-group pt-3">
        <li class="custom-list-style mb-2">
            <a href="{{ route('post.step.one') }}">Create a posting</a>
        </li>
        <li class="mt-1 mb-3">
            <a href="{{ route('signin') }}">My Account</a>
        </li>
    </ul>
    <div class="search-style mb-4">
        <form action="#" method="post">
            <div class="input-group">
                <input type="text" name="search" id="search" class="form-control" placeholder="Search..."
                    required>
                <button type="submit" class="text-input-group"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <div class="custom-calender mb-3">
        <h5><a href="#">Event calendar</a></h5>
    </div>
    <div class="calender-style">
        <div id="datepicker"></div>
    </div>
    <div class="mt-5 list-style1 mb-3">
        <ul class="list-group">
            <li class="list-item custom-list-style1">
                <a href="{{ route('shop') }}">Help, faq, abuse, legal</a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">Avoid scams & fraud</a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">Personal safety tips</a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">Terms of use</a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">Privacy policy</a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">System Status</a>
            </li>
        </ul>
    </div>
    <div class="list-style1">
        <ul class="list-group ">
            <li class="list-item custom-list-style1">
                <a href="{{ route('shop') }}">About craigslist</a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">Craigslist open source</a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">Craigslist blog</a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">Best of craigslist</a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">Craigslist joe</a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">Craig newmark <br>  philanthropies</a>
            </li>
        </ul>
    </div>
</div>
