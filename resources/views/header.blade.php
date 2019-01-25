<div id="header">
<div class="container">
            <div class="pull-left auto-width-left mt-2">
					<ul class="top-menu menu-beta l-inline">
						<li><a href="#"><i class="fa fa-home"></i> K448/67 Trưng Nữ Vương-Đà Nẵng</a></li>
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
<div class="Header1 container-fluid d-flex d-none d-xl-block align-items-center">
        <div class="row">
            <div class="col-2">
                <img src="source/assets/dest/images/tải xuống.jpg" height="50px" class="w-50" >

            </div>
            <div class="col-4 d-flex justify-content-start">
            <nav class="main-menu">
                <ul class="nav mt-2">
                <li><a href="{{route('users.index')}}">Trang chủ</a></li>
                <li><a href="#">Loại Sản phẩm</a>
							<ul class="sub-menu">
							@foreach($loai_sp as $loai_sp)
								<li><a href="{{route('users.category',$loai_sp->id)}}">{{$loai_sp->name}}</a></li>
							@endforeach
							</ul>
						</li>
                        <li><a href="{{route('users.contact')}}">Liên hệ</a></li>
                </ul>
            </nav>
            </div>
            <div class="col-4 d-flex justify-content-end">
            <form role="search" method="get" id="searchform" action="{{route('users.search')}}">
					        <input type="text" value="" name="search" id="s" placeholder="Nhập từ khóa..." class="mt-2" />
					        <button class="fas fa-search mb-1" type="submit" id="searchsubmit"></button>
						</form>
			</div>
			<div class="col-2 d-flex justify-content-center mt-3">
					@if(Session::has('cart'))
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (@if(Session::has('cart')){{Session('cart')->totalQty}} @else Trống @endif) <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
								@foreach($product_cart as $product)
								<div class="cart-item">
								<a class="cart-item-delete" href="{{route('users.delcart',$product['item']['id'])}}"><i class="fa fa-times"></i></a>
									<div class="media">
										<a class="pull-left" href="#"><img src="source/image/product/{{$product['item']['image']}}" alt=""></a>
										<div class="media-body">
										<span class="cart-item-title">{{$product['item']['name']}}</span>
										<span class="cart-item-amount">{{$product['qty']}}*<span>@if($product['item']['promotion_price']==0){{$product['item']['unit_price']}}@else{{$product['item']['promotion_price']}}@endif</span></span>
										</div>
									</div>
								</div>
								@endforeach

								<div class="cart-caption">
								<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{Session('cart')->totalPrice}}</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="{{route('dathang')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
						@endif
        </div>
    </div>
    </div>