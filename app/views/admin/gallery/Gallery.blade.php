@extends('layout.main')
@section('title','Gallery')
@section('content')

<div class="row">
    <table class="table table-stripped">
        <thead>
            <th>id</th>
            <th>san pham</th>
            <th>Anh</th>
            <th>
                <a href="{{BASE_URL}}./product-gallery/addGal" class="btn btn-sm btn-success">tạo mới</a>
            </th>
        </thead>
        <tbody>
            @foreach($galleries as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td >{{$item->getGallery->name}}</td>
                <td><img src="{{$item->image}}" alt="" class="" width="100px"></td>
                <td>
                    <a href="{{BASE_URL.'product-gallery/editGal/'.$item->id}}" class="btn btn-sm btn-primary">sửa</a>
                    <a href="{{BASE_URL.'product-gallery/deleteGal/'.$item->id}}" onclick="return confirm('ban co muon xoa')" class="btn btn-sm btn-danger">xóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection




