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
    <h1> Quản Lý Sản Phẩm </h1>
</div>
<div>
<table class="table table-bordered table-hover"><tr><th class='text-center'>ID</th><th class='text-center'>Tên</th><th class='text-center'>Mô Tả</th><th class='text-center'>Giá Gốc</th><th class='text-center'>Giá Giảm</th><th class='text-center'>Ảnh</th><th class='text-center'>Xử Lý</th></tr>
@foreach($products as $product)
    <tr class="text-center"><td>{{$product->id}}</td>
    <td>{{$product->name}}</td>
    <td>{{$product->description}}</td>
    <td>{{$product->unit_price}}</td>
    <td>{{$product->promotion_price}}</td>
    <td><img src="source/image/product/{{$product->image}}" alt="" height="100px"></td>
    <td class="d-flex align-items-center justify-content-center">
    <form action="{{asset('product/' . $product->id)}}" method="GET">

    <button type="submit" class="btn btn-primary rounded-0">Xem</button>
    </form>
    <form action="{{asset('product/'. $product->id.'/edit')}}" method="GET"><button type="submit" class="btn btn-warning rounded-0 mx-5">Cập Nhật</button>
    </form>
    <form action="{{asset('product/'. $product->id)}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" value="DELETE" name="_method"><button type="submit" class="btn btn-danger rounded-0">Xóa</button></form>
    </td></tr>
@endforeach
</table>
</div>
<div id="content" class="container-fluid d-none d-xl-block align-items-center mt-3">
                <div class="row">
                    <div class="col-3">
                            <h1>Tạo Sản Phẩm</h1>
                            
                    </div>
                    <div class="col-9 d-flex justify-content-start align-items-center">
                    <form action="{{asset('product/create')}}" method="GET">
                            <button type="submit" class="btn btn-danger rounded-0">Tạo Sản Phẩm</button>
                    </form>
                    </div>
                </div>
            </div>
@endsection