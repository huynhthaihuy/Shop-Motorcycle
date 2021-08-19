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
    <h1> Tạo Sản Phẩm </h1>
</div>
<div class="align-items-center">
<form enctype="multipart/form-data" action="{{asset('product')}}" method="POST">
{{csrf_field()}}
    <div class="form-group ">
    Tên: <input type="text" name="name" placeholder="input name" class="ml-5"><br>
    </div>
    <div class="form-group ">
    Id_loại: <input type="text" name="id_type" placeholder="input" class="ml-5"><br>
    </div>
    <div class="form-group ">
    Description: <input type="text" name="description" placeholder="input description" class="ml-5"><br>
    </div>
    <div class="form-group ">
    Giá Gốc: <input type="text" name="unit_price" placeholder="input unit_price" class="ml-5"><br>
    </div>
    <div class="form-group ">
    Giá Giảm: <input type="text" name="promotion_price" placeholder="input promotion_price" class="ml-5"><br>
    </div>
    <div class="form-group">
        <label>Ảnh</label>
        <input type="file" name="image" class="form-control">
        </div>
    <div class="form-group ">
    Số Lượng: <input type="text" name="quantity" placeholder="input" class="ml-5"><br>
    </div>
    <div class="form-group ">
    Khuyến Mãi:<input type="text" name="new" placeholder="input" class="ml-5"><br>
    </div>
    <div> 
    Loại:
    <select name="product_type" class="ml-5">
    @foreach($product_types as $product_type)
    <option value="{{$product_type->id}}">
    {{$product_type->name}}
    </option>
    @endforeach
</select>
    </div>
    <div class="form-group mt-3">
    <button class="btn-danger" type="submit">Xác Nhận</button>
    </div>
</form>
</div>
@endsection