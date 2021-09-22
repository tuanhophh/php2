@extends('layout.main')
@section('title','danh sách danh mục')
@section('content')
<div class="row">
    <table class="table table-stripped">
        <thead>
            <th>id</th>
            <th>tên danh mục</th>
            <th>hiển thị menu</th>
            <th>số lượng sản phẩm</th>
            
            <th>
                <a href="{{BASE_URL.'danh-muc/addCate'}}" class="btn btn-sm btn-success">tạo mới</a>
            </th>
        </thead>
        <tbody>
            @foreach($cates as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->cate_name}}</td>
                <td>{{$item->show_menu==1 ? "có" : "không"}}</td>
                <td>{{count($item->products)}}</td>
                
                <td>
                    <a href="{{BASE_URL.'danh-muc/editCate/'.$item->id}}" class="btn btn-sm btn-primary">sửa</a>
                    <a href="{{BASE_URL.'danh-muc/deleteCate/'.$item->id}}" onclick="return confirm('ban co muon xoa')" class="btn btn-sm btn-danger">xóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection