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
    <h1> Quản Lý Bills </h1>
</div>
<div>
<table class="table table-bordered table-hover"><tr><th class='text-center'>ID</th><th class='text-center'>Khách Hàng</th><th class='text-center'>Ngày</th><th class='text-center'>Tổng</th><th class='text-center'>Ghi Chú</th><th class='text-center'>Xử Lý</th></tr>
@foreach($bills as $bill)
    <tr class="text-center"><td>{{$bill->id}}</td>
    <td>{{$bill->id_customer}}</td>
    <td>{{$bill->date_order}}</td>
    <td>{{$bill->total}}</td>
    <td>{{$bill->note}}</td>
    <td class="d-flex align-items-center justify-content-center">
    <form action="{{asset('bill/' . $bill->id)}}" method="GET">

    <button type="submit" class="btn btn-primary rounded-0">Xem</button>
    </form>
    <form action="{{asset('bill/'. $bill->id.'/edit')}}" method="GET"><button type="submit" class="btn btn-warning rounded-0 mx-5">Cập Nhật</button>
    </form>
    <form action="{{asset('bill/'. $bill->id)}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" value="DELETE" name="_method"><button type="submit" class="btn btn-danger rounded-0">Xóa</button></form>
    </td></tr>
@endforeach
</table>
</div>
@endsection