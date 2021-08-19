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
    <h1> Quản Lý Người Dùng </h1>
</div>
<div>
<table class="table table-bordered table-hover"><tr><th class='text-center'>ID</th><th class='text-center'>Tên</th><th class='text-center'>Tài Khoản</th><th class='text-center'>Xử Lý</th></tr>
@foreach($users as $user)
    <tr class="text-center"><td>{{$user->id}}</td>
    <td>{{$user->full_name}}</td>
    <td>{{$user->email}}</td>
    <td class="d-flex align-items-center justify-content-center">
    <form action="{{asset('admin/' . $user->id)}}" method="GET">

    <button type="submit" class="btn btn-primary rounded-0">Xem</button>
    </form>
    <form action="{{asset('admin/'. $user->id.'/edit')}}" method="GET"><button type="submit" class="btn btn-warning rounded-0 mx-5">Cập Nhật</button>
    </form>
    <form action="{{asset('admin/'. $user->id)}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" value="DELETE" name="_method"><button type="submit" class="btn btn-danger rounded-0">Xóa</button></form>
    </td></tr>
@endforeach
</table>
</div>
<div id="content" class="container-fluid d-none d-xl-block align-items-center mt-3">
                <div class="row">
                    <div class="col-3">
                            <h1>Tạo Tài Khoản</h1>
                            
                    </div>
                    <div class="col-9 d-flex justify-content-start align-items-center">
                    <form action="{{asset('admin/create')}}" method="GET">
                            <button type="submit" class="btn btn-danger rounded-0">Tạo Tài Khoản</button>
                    </form>
                    </div>
                </div>
            </div>
@endsection