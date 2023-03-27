@extends('layouts.app')

@section('admin_content') 
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
      tinymce.init({
        selector: '#mytextarea',
        menubar:false,
        language: 'ar'
      });
    </script>
            <div class="card-header">اضافة مقالة</div>  
            <div class="card-body">
                <form enctype="multipart/form-data" method="post" class="form-horizontal" action="{{url('/admin/store')}}">
                    {{ csrf_field() }} {{--مهم جدا--}}
                    <div class="form-group">
                        <input class="form-control" type="text" name="title" placeholder="العنوان هنا">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="body" id="mytextarea">النص هنا!</textarea>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="file" name="thumbnail" accept="image/*"/>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" value="نشر"/>
                    </div>
                </form>
            </div>
@endsection
