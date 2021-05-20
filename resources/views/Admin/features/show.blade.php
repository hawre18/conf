@extends('Admin.layout.master')

@section('content')
    <section class="content" style="direction: rtl">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">جزئیات ویژگی{{$feature->title}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                            <lable>عنوان ویژگی: {{$feature->title}}</lable></br>
                            <lable>مربوط به محصول: {{$feature->product->title}}</lable></br>
                            <lable for="shortdescription">توضیحات : </lable></br>
                            <div id="shortdescription" itemprop="description" id="tab-description" class="tab-pane active">
                                {!! $feature->description !!}
                            </div>
                            <a class="btn btn-warning" href="{{route('features.edit',$feature->id)}}">ویرایش</a>
                            <a class="btn btn-danger" href="{{route('features.delete',$feature->id)}}">حذف</a>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
@endsection
