@extends('adminmaster')
@section('content')
<div class="Header1 container-fluid d-flex d-none d-xl-block align-items-center bg-light">
<div class="row">
    <div class="col-2">
    </div>
    <div class="col-10">
            <nav class="main-menu">
                <ul class="nav mb-1">
                <li><a href="{{route('admins.index')}}">Quản Lý Người Dùng</a></li>
					<li><a href="{{route('products.index')}}">Quản Lý Sản Phẩm</a></li>
					<li><a href="{{route('bills.index')}}">Quản Lý Hóa Đơn</a></li>
                </ul>
            </nav>
</div>
</div>
</div>
<div id="content" class="Header container text-center">
    <h1> Tạo Người Dùng </h1>
</div>
<div class="align-items-center">
<form action="{{asset('admin')}}" method="POST">
{{csrf_field()}}
    <div class="form-group ">
    Họ Và Tên: <input type="text" name="name" placeholder="input name"><br>
    </div>
    <div class="form-group ">
    Tài Khoản: <input type="Email" name="email" placeholder="input email"><br>
    </div>
    <div class="form-group ">
    Mật Khẩu: <input type="Password" name="password"><br>
    </div>
    <div class="form-group ">
    Điện Thoại: <input type="text" name="phone"><br>
    </div>
    <div class="form-group ">
    Địa Chỉ: <input type="text" name="address"><br>
    </div>
    <div class="form-group ">
    <button class="btn-danger" type="submit">Xác Nhận</button>
    </div>
</form>
</div>
@endsection