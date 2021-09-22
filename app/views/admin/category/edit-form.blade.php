@extends('layout.main')
@section('title', 'Sua danh mục')
@section('content')
<div class="row">
    <div class="col-6 offset-3">
        <form action="" method="post" id="cate_form">
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="cate_name" class="form-control" value="{{$cate->cate_name}}">
                @if(isset($errors)&& isset($errors['cate_name']))
                <span class="has-error text-danger">{{$errors['cate_name']}}</span>
                @endif
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" value="1" name="show_menu" id="show_menu">
                <label class="form-check-label" for="show_menu">Hiển thị ở menu</label>
            </div>
            <div class="form-group">
                <label for="">Mo ta</label>
                <input type="text" name="desc" class="form-control" value="{{$cate->desc}}">
                @if(isset($errors)&& isset($errors['desc']))
                <span class="has-error text-danger">{{$errors['desc']}}</span>
                @endif
            </div>
            <div class="text-right">
                <a href="{{BASE_URL . 'danh-muc'}}" class="btn btn-sm btn-danger">Hủy</a>
                <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
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
                cate_name: {
                    required: true,
                    remote: {
                        url: `{{BASE_URL}}danh-muc/check-name`,
                        type: 'post',
                        data: {
                            cate_name: function(){
                                return $(`[name="cate_name"]`).val()
                            }
                        }
                    }
                },
                desc: {
                    required: true
                }
            },
            messages: {
                cate_name: {
                    required: "Hãy nhập tên danh mục",
                    remote: "Tên danh mục đã tồn tại, hãy chọn danh mục khác"
                },
                desc: {
                    required: "Hãy nhập mô tả"
                }
            }
        });
    });
</script>
@endsection