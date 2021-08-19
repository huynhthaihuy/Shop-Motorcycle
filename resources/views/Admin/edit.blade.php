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
    <h1> Chỉnh Sửa Người Dùng </h1>
</div>
<div class="align-items-center">
<form action="{{asset('admin/'. $user->id.'/updated')}}" method="post">
    <input type="hidden" name="_method" value="put" /> 
    <div class="form-group ">
    Họ Và Tên: <input type="text" name="name" placeholder="input name" value="{{$user->full_name}}"><br>
    Tài Khoản: <input type="email" name="email" placeholder="input email" value="{{$user->email}}"><br>
    Mật Khẩu: <input type="password" name="password" required><br>
    Điện Thoại: <input type="text" name="phone" placeholder="input number" value="{{$user->phone}}"><br>
    Địa Chỉ: <input type="text" name="address" placeholder="input address" value="{{$user->address}}"><br>
    </div>
    <div class="form-group ">
    <button style="height:40px; width:100px" class=" ml-2 btn-warning" type="submit">Lưu</button>
    {{ csrf_field() }}
    </div>
</form>
</div>
@endsection