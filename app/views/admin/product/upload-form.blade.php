@extends('layout.main')
@section('title','upload')

@section('content')
<div class="row">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">chon anh</label>
            <input type="file" name="image[]" id="" multiple class="form-control">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-sm btn-danger">Upload</button>
        </div>
        
    </form>
</div>

@endsection