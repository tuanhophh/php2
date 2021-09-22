@extends('layout.main');
@section('title','Thêm sản phẩm')

@section('content')
<form action="" method="post" enctype="multipart/form-data" id="cate_form">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="">Chọn ảnh</label>
                <br>
                <img src="{{BASE_URL.'/'.$gal->image}}" alt="" width="100px">
                <input type="file" multiple name="image" class="form-control" id="" >
            </div>
            
            
            <div class="form-group">
                <label for="">Sản phẩm</label>
                <select name="product_id" id="" class="form-control">
                    {{-- @foreach ($pro as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach --}}
                        @foreach ($pro as $item)
                        <option value="{{$item->id}}" @if ($item->id == $gal->product_id)
                            selected
                            @endif>{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <a href="{{BASE_URL . 'san-pham'}}" class="btn btn-sm btn-danger">Hủy</a>
                        <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endsection
    