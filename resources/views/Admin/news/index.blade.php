@extends('Admin.layout.master')

@section('content')
    <section class="content" style="direction: rtl">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">تنوع ها</h3>
                <div class="text-left">
                    <a class="btn btn-app"  href="{{route('news.create')}}">
                        <i class="fa fa-plus"></i> جدید
                    </a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @if(Session::has('news_success'))
                    <div class="alert alert-success">
                        <div>{{Session('news_success')}}</div>
                    </div>
                @elseif(Session::has('news_error'))
                    <div class="alert alert-danger">
                        <div>{{Session('news_error')}}</div>
                    </div>
                @endif
                <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th class="text-center">شناسه</th>
                                <th class="text-center">عنوان</th>
                                <th class="text-center">توضیحات</th>
                                <th class="text-center">عکس</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($newses as $news)
                                <tr>
                                    <td class="text-center"><a href="{{ route('news.show', $news->id)}}">{{ $loop->index + 1 }}</a></td>
                                    <td class="text-center"><a href="{{ route('news.show', $news->id)}}">{{$news->title}}</a></td>
                                    <td class="text-center"><a href="{{ route('news.show', $news->id)}}">{!!mb_substr($news->description,0,20).' ...'!!}</a></td>
                                    <td width="20%" class="text-center img-circle"><img class="center-block img-responsive" width="20%" height="8%" src="{{$news->photo->path}}"></td>
                                    <td class="text-center">
                                        <a class="btn btn-warning" href="{{route('news.edit',$news->id)}}">ویرایش</a>
                                        <a class="btn btn-danger" href="{{route('news.delete',$news->id)}}">حذف</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                <!-- /.table-responsive -->
                    <div class="center-block text-center">{{ $newses->links() }}</div>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
@endsection
