@extends('Admin.layout.master')

@section('content')
    <section class="content" style="direction: rtl">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">جزئیات خبر{{$news->title}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                            <lable>عنوان خبر: {{$news->title}}</lable></br>
                            <lable for="description">توضیحات : </lable></br>
                            <div id="description" itemprop="description" id="tab-description" class="tab-pane active">
                                {!! $news->description !!}
                            </div>
                            <label for="photo">عکس:</label>
                            <div id="photo">
                                <img class="center-block img-responsive" src="{{$news->photo->path}}">
                            </div>
                <a class="btn btn-warning" href="{{route('news.edit',$news->id)}}">ویرایش</a>
                            <a class="btn btn-danger" href="{{route('news.delete',$news->id)}}">حذف</a>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
@endsection
