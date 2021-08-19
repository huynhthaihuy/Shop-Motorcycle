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
<div  class="Header container text-center">
    <h1> Show Người Dùng</h1>
</div>
<div id="content">
<table class="table table-bordered table-hover"><tr><th class='text-center'>ID</th><th class='text-center'>Tên</th><th class="text-center">Tài Khoản</th><th class="text-center">Mật Khẩu</th><th class="text-center">Điện Thoại</th><th class="text-center">Địa Chỉ</th><th class='text-center'>Xử Lý</th></tr>
    <tr scope="row"><td>{{$user->id}}</td>
    <td>{{$user->full_name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->password}}</td>
    <td>{{$user->phone}}</td>
    <td>{{$user->address}}</td>
    <td class="d-flex align-items-center justify-content-around">
    <form action="{{asset('admin/'. $user->id.'/edit')}}" method="GET"><button class="btn btn-warning rounded-0">Cập Nhật</button>
    </form>
    <form action="{{asset('admin/'. $user->id)}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" value="DELETE" name="_method"><button type="submit" class="btn btn-danger rounded-0">Xóa</button></form>
    </td></tr>
</table>
</div>
@endsection