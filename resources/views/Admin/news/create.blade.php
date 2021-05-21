@extends('Admin.layout.master')
@section('styles')
    <link rel="stylesheet" href="{{asset('/admin/dist/css/dropzone.css')}}">
@endsection
@section('content')
    <section id="app" class="content" style="direction: rtl">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">ایجاد خبر</h3>
                </div>
            <!-- /.box-header -->
            <div class="box-body">
                @include('Admin.layout.errors')
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form method="post" action="\news">
                            @csrf
                            <div class="form-group">
                                <label for="title">عنوان خبر</label>
                                <input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="نام محصول">
                            </div>
                            <div class="form-group">
                                <label >توضیحات</label>
                                <textarea  id="longDescription" name="description" class="form-control" >{{old('description')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="photo">تصویر</label>
                                <input type="hidden" name="photo_id" id="product-photo">
                                <div id="photo" class="dropzone" ></div>
                                <div class="=row">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success pull-left">ذخیره</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script-vuejs')
    <script src="{{asset('/admin/js/app.js')}}"></script>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{asset('/admin/dist/js/dropzone.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/plugins/ckeditor/ckeditor.js')}}"></script>
    <script>
        Dropzone.autoDiscover=false;
        var drop=new Dropzone('#photo',{
            addRemoveLinks:true,
            maxFiles: 1,
            url:"{{route('photos.upload')}}",
            sending:function (file,xhr,formData) {
            formData.append("_token","{{csrf_token()}}")
            },
            success: function (file,response) {
                document.getElementById('product-photo').value = response.photo_id
            }
        });


        CKEDITOR.replace('ShortDescription',{
        customConfig:'config.js',
        toolbar:'simple',
        language:'fa',
        removePlugins:'cloudservices, easyimage'
        });
        CKEDITOR.replace('longDescription',{
            customConfig:'config.js',
            toolbar:'simple',
            language:'fa',
            removePlugins:'cloudservices, easyimage'
        })
    </script>
@endsection
