@extends('layout.main');
@section('title','Thêm sản phẩm')

@section('content')
<form action="" method="post" enctype="multipart/form-data" id="cate_form">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="name" id="" class="form-control" value="{{$pro->name}}">
            </div>
            <div class="form-group">
                <label for="">Danh mục</label>
                <select name="cate_id" id="" class="form-control">
                    @foreach ($cates as $item)
                    <option value="{{$item->id}}" 
                        @if ($item->id == $pro->cate_id) selected
                        @endif>{{$item->cate_name}}
                    </option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="">Chọn ảnh</label>
                <br>
                <img src="{{BASE_URL.'/'.$pro->image}}" alt="" width="100px">
                <input type="file" multiple name="image" class="form-control" id="" value="">
                
            </div>
            
            <div class="form-group">
                <label for="">Giá</label>
                <input type="text" name="price" id="" class="form-control" value="{{$pro->price}}">
            </div>
            <div class="form-group">
                <a href="{{BASE_URL . 'san-pham'}}" class="btn btn-sm btn-danger">Hủy</a>
                <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
            </div>
        </div>
    </div>
</form>
@endsection
@section('page-script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#cate_form').validate({
            rules: {
                name: {
                    required: true,
                    // remote: {
                        //     url: `{{BASE_URL}}san-pham/check-name`,
                        //     type: 'post',
                        //     data: {
                            //         name: function(){
                                //             return $(`[name="name"]`).val()
                                //         }
                                //     }
                                // }
                            },
                            // image: {
                                //     required: true
                                // },
                                price: {
                                    required: true
                                },
                                
                            },
                            messages: {
                                name: {
                                    required: "Hãy nhập tên sản phẩm",
                                    remote: "Tên sản phẩm đã tồn tại, hãy chọn sản phẩm khác"
                                },
                                // image: {
                                    //     required: "Hãy nhập ảnh"
                                    // },
                                    price: {
                                        required: "hãy nhập giá!"
                                    }
                                }
                            });
                        });
                    </script>
                    @endsection