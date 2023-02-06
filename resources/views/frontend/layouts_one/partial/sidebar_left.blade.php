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
            <a href="{{ route('user.signup') }}">My Account</a>
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
                <a href="{{ route('shop') }}">hjælp. faq, misbrug, juridisk</a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">undgå svindel og bedrag </a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">personlige sikkerhedsråd </a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">anvendelsesvilkår </a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">datapolitik</a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">systemstatus </a>
            </li>
        </ul>
    </div>
    <div class="list-style1">
        <ul class="list-group ">
            <li class="list-item custom-list-style1">
                <a href="{{ route('shop') }}">om craigslist </a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">craigslist åben kilde </a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">craigslist blog </a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">bedste-fra-craigslist </a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">"craigslist joe" </a>
            </li>
            <li class="custom-list-style1">
                <a href="{{ route('shop') }}">craig newmark philanthropies </a>
            </li>
        </ul>
    </div>
</div>
