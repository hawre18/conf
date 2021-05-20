@extends('Admin.layout.master')

@section('content')
    <section class="content" style="direction: rtl">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">تنوع ها</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @if(Session::has('baners_success'))
                    <div class="alert alert-success">
                        <div>{{Session('baners_success')}}</div>
                    </div>
                @elseif(Session::has('baners_error'))
                    <div class="alert alert-danger">
                        <div>{{Session('baners_error')}}</div>
                    </div>
                @endif
                <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th class="text-center">شناسه</th>
                                <th class="text-center">عنوان بنر</th>
                                <th class="text-center">محصول</th>
                                <th class="text-center">توضیحات</th>
                                <th class="text-center">عکس</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($baners as $baner)
                                <tr>
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td class="text-center">{{$baner->title}}</td>
                                    <td class="text-center">{{$baner->product->title}}</td>
                                    <td class="text-center">{!!mb_substr($baner->description,0,20).' ...'!!}</td>
                                    <td class="text-center"><img width="100" src="{{$baner->photo->path}}"></td>
                                    <td class="text-center">
                                        <a class="btn btn-warning" href="{{route('baners.edit',$baner->id)}}">ویرایش</a>
                                        <a class="btn btn-danger" href="{{route('baners.delete',$baner->id)}}">حذف</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                <!-- /.table-responsive -->
                    <div class="center-block text-center">{{ $baners->links() }}</div>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
@endsection
