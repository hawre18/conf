@extends('Admin.layout.master')
@section('styles')
    <link rel="stylesheet" href="{{asset('/admin/dist/css/dropzone.css')}}">
@endsection
@section('content')
    <section id="app" class="content" style="direction: rtl">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">ویرایش محصول</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @include('Admin.layout.errors')
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form method="post" action="\features\{{$feature->id}}">
                            @csrf
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="form-group">
                                <label for="title">عنوان ویژگی</label>
                                <input type="text" name="title" value="{{$feature->title}}" class="form-control" placeholder="عنوان ویژگی">
                                <input type="hidden" name="id" value="{{$feature->product_id}}">
                            </div>
                            <div class="form-group">
                                <label >توضیحات </label>
                                <textarea  id="longDescription" name="description" class="form-control" >{{$feature->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="photo">گالری تصاویر</label>
                                <input type="hidden" name="photo_id" id="feature-photo" value="{{$feature->photo->id}}">
                                <div class="form-control dropzone" id="photo"></div>
                                    <div class="col-sm-3" id="updated_photo_{{$feature->photo->id}}">
                                        <img class="img-responsive" src="{{$feature->photo->path}}">
                                        <button type="button" class="btn btn-danger" onclick="removeImages({{$feature->photo->id}})">حذف</button>
                                    </div>
                            </div>
                            <button type="submit"  class="btn btn-success pull-left">ذخیره</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
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
        var photo=[].concat({{$feature->photo->pluck('id')}})
        var drop=new Dropzone('#photo',{
            addRemoveLinks:true,
            maxFiles: 1,
            url:"{{route('photos.upload')}}",
            sending:function (file,xhr,formData) {
                formData.append("_token","{{csrf_token()}}")
            },
            success: function (file,response) {
                document.getElementById('feature-photo').value=response.photo_id
            }
        });
        CKEDITOR.replace('longDescription',{
            customConfig:'config.js',
            toolbar:'simple',
            language:'fa',
            removePlugins:'cloudservices, easyimage'
        })
        removeImages=function (id) {
            var index=photo.indexOf(id)
            photo.splice(index,1);
            document.getElementById('updated_photo_'+id).remove();
        }
    </script>
@endsection
