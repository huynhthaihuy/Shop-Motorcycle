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
    <h1> Chỉnh Sửa Hóa Đơn </h1>
</div>
<div class="align-items-center">
<form action="{{asset('bill/'. $bill->id.'/updated')}}" method="post">
    <input type="hidden" name="_method" value="put" /> 
    <div class="form-group ">
    Id_khách: <input type="text" name="id_customer" placeholder="input id" value="{{$bill->id_customer}}"><br>
    Ngày: <input type="email" name="date_order" placeholder="input email" value="{{$bill->date_order}}"><br>
    Giá: <input type="text" name="total" placeholder="input total" value="{{$bill->total}}"><br>
    Phương Thức: <input type="text" name="payment" placeholder="input Pay" value="{{$bill->payment}}"><br>
    Ghi chú: <input type="text" name="note" placeholder="input note" value="{{$bill->note}}"><br>
    </div>
    <div class="form-group ">
    <button style="height:40px; width:100px" class=" ml-2 btn-warning" type="submit">Lưu</button>
    {{ csrf_field() }}
    </div>
</form>
</div>

@endsection