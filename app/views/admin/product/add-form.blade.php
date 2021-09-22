@extends('layout.main');
@section('title','Thêm sản phẩm')

@section('content')
<div class="row">
    <div class="col-6 offset-3">
        <form action="" method="post" enctype="multipart/form-data" id="cate_form">
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="name" id="" class="form-control">
                @if(isset($errors)&& isset($errors['name']))
                <span class="has-error text-danger">{{$errors['name']}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Danh mục</label>
                <select name="cate_id" id="" class="form-control">
                    @foreach ($cates as $item)
                    <option value="{{$item->id}}">{{$item->cate_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Chọn ảnh</label>
                <input type="file" multiple name="image" class="form-control" id="">
                
            </div>
            <div class="form-group">
                <label for="">Giá</label>
                <input type="text" name="price" id="" class="form-control">
                @if(isset($errors)&& isset($errors['price']))
                <span class="has-error text-danger">{{$errors['price']}}</span>
                @endif
            </div>
            <div class="form-group">
                <a href="{{BASE_URL . 'san-pham'}}" class="btn btn-sm btn-danger">Hủy</a>
                <button type="submit" class="btn btn-sm btn-primary" name="btnThem">Lưu</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('page-script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#cate_form').validate({
            rules: {
                name: {
                    required: true,
                    remote: {
                        url: `{{BASE_URL}}san-pham/check-name`,
                        type: 'post',
                        data: {
                            name: function(){
                                return $(`[name="name"]`).val()
                            }
                        }
                    }
                },
                image: {
                    required: true
                },
                price: {
                    required: true
                },
                
            },
            messages: {
                name: {
                    required: "Hãy nhập tên sản phẩm",
                    remote: "Tên sản phẩm đã tồn tại, hãy chọn sản phẩm khác"
                },
                image: {
                    required: "Hãy nhập ảnh"
                },
                price: {
                    required: "hãy nhập giá!"
                }
            }
        });
    });
</script>
@endsection