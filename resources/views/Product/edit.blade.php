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
    <h1> Cập Nhật Sản Phẩm </h1>
</div>
<div class="align-items-center">
<form action="{{asset('product/'. $product->id.'/updated')}}" method="post">
    <input type="hidden" name="_method" value="put" /> 
    <div class="form-group ">
    Tên: <input type="text" name="name" placeholder="input name" value="{{$product->name}}"><br>
    </div>
    <div class="form-group ">
    Mô Tả: <input type="text" name="description" placeholder="input text" value="{{$product->description}}"><br>
    </div>
    <div class="form-group ">
    Giá Gốc: <input type="text" name="unit_price" value="{{$product->unit_price}}"><br>
    </div>
    <div class="form-group ">
    Giá Giảm: <input type="text" name="promotion_price" value="{{$product->promotion_price}}"><br>
    </div>
    <div class="form-group ">
    Unit: <input type="text" name="unit" value="{{$product->unit}}"><br>
    </div>
    <div class="form-group ">
    Khuyến Mãi: <input type="text" name="new" value="{{$product->new}}"><br>
    </div>
    <div class="form-group ">
    <button style="height:40px; width:100px" class=" ml-2 btn-warning" type="submit">Lưu</button>
    {{ csrf_field() }}
    </div>
</form>
</div>
@endsection