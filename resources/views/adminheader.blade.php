<div id="header">
<div class="container">
            <div class="pull-left auto-width-left mt-2">
					<ul class="top-menu menu-beta l-inline">
						<li><a href="{{route('users.index')}}"><i class="fa fa-home"></i> K448/67 Trưng Nữ Vương-Đà Nẵng</a></li>
						<li><a href="#"><i class="fa fa-phone"></i> 0905 463 037</a></li>
					</ul>
				</div>
                <div class="pull-right auto-width-right mt-2">
					<ul class="top-details menu-beta l-inline">
                    @if(Auth::check())
                    <li><a href="#">Chào bạn {{Auth::user()->full_name}}</a></li>
                    <li><a href="{{route('users.logout')}}">Đăng xuất</a></li>
                    @else
                    <li><a href="{{route('users.signup')}}">Đăng kí</a></li>
						<li><a href="{{route('users.login')}}">Đăng nhập</a></li>
                @endif
					</ul>
				</div>
				<div class="clearfix"></div>
                </div>
    </div>