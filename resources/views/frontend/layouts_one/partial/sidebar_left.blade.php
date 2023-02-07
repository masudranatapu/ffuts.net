<div class="heading1 p-3">
    <ul class="list-group">
        <li class="custom-list-style mb-2 text-center">
            <a href="{{ route('post.step.one') }}">Create a posting</a>
        </li>
        <li class="mt-1 mb-3 text-center">
            @if(auth('user')->check())
                <a href="{{ route('user.profile') }}">My Account</a>
            @else
                <a href="{{ route('signin') }}">My Account</a>
            @endif
        </li>
    </ul>
    <div class="search-style mb-4">
        <form action="#" method="post">
            <div class="input-group">
                <input type="text" name="search" id="search" class="form-control" placeholder="Search..." required>
                <button type="submit" class="text-input-group"><i class="la la-search"></i></button>
            </div>
        </form>
    </div>
    <div class="custom-calender mb-3">
        <h5><a href="#">Event calendar</a></h5>
    </div>
    <div class="calender-style mb-3">
        <div id="datepicker"></div>
    </div>
    <div class="custom-calender mb-3">
        <h5><a href="#">Recent Post</a></h5>
    </div>
    <div class="list-style1 mb-3">
        <ul class="list-group">
            <li class="list-item custom-list-style1">
                <a href="{{ route('shop') }}">Lorem ipsum dolor sit, amet...</a>
            </li>
            <li class="list-item custom-list-style1">
                <a href="{{ route('shop') }}">magnam maxime corporis quam...</a>
            </li>
            <li class="list-item custom-list-style1">
                <a href="{{ route('shop') }}">Inventore dignissimos veniam...</a>
            </li>
            <li class="list-item custom-list-style1">
                <a href="{{ route('shop') }}">ipsam dicta voluptate libero...</a>
            </li>
            <li class="list-item custom-list-style1">
                <a href="{{ route('shop') }}">Laudantium iusto magnam maxime...</a>
            </li>
        </ul>
    </div>
</div>

