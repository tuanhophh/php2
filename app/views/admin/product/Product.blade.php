@extends('layout.main')
@section('title','Sản phẩm')



@section('content')

<div class="row">
    <table class="table table-stripped">
        <thead>
            <th>id</th>
            <th>san pham</th>
            <th>danh muc</th>
            <th>Anh</th>
            <th>gia</th>
            <th>detail</th>
            <th>
                <a href="{{BASE_URL}}./san-pham/addPro" class="btn btn-sm btn-success">tạo mới</a>
            </th>
        </thead>
        <tbody>
            @foreach($products as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->category->cate_name}}</td>
                <td><img src="{{$item->image}}" alt="" class="" width="100"></td>
                <td>{{$item->price}}</td>
                <td>{{$item->detail}}</td>
                
                {{-- <td>{{count($item->products)}}</td> --}}
                <td>
                    <a href="{{BASE_URL.'san-pham/editPro/'.$item->id}}" class="btn btn-sm btn-primary">sửa</a>
                    <a href="{{BASE_URL.'san-pham/deletePro/'.$item->id}}" onclick="return confirm('ban co muon xoa')" class="btn btn-sm btn-danger">xóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
{{-- <h3>Sản phẩm: {{ $product->name }}</h3>
<p>Danh mục {{$product->category->cate_name}}</p>
@foreach ($product->galleries as $img)
<img src="{{$img->img_url}}" width="50px">
@endforeach --}}



