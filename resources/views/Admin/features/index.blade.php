@extends('Admin.layout.master')

@section('content')
    <section class="content" style="direction: rtl">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">تنوع ها</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @if(Session::has('features_success'))
                    <div class="alert alert-success">
                        <div>{{Session('features_success')}}</div>
                    </div>
                @elseif(Session::has('features_error'))
                    <div class="alert alert-danger">
                        <div>{{Session('features_error')}}</div>
                    </div>
                @endif
                <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th class="text-center">شناسه</th>
                                <th class="text-center">نام ویژگی</th>
                                <th class="text-center">نام محصول</th>
                                <th class="text-center">توضیحات</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($features as $feature)
                                <tr>
                                    <td class="text-center"><a href="{{ route('features.show', $feature->id)}}">{{ $loop->index + 1 }}</a></td>
                                    <td class="text-center"><a href="{{ route('features.show', $feature->id)}}">{{$feature->title}}</a></td>
                                    <td class="text-center"><a href="{{ route('features.show', $feature->id)}}">{{$feature->product->title}}</a></td>
                                    <td class="text-center"><a href="{{ route('features.show', $feature->id)}}">{!!mb_substr($feature->description,0,20).' ...'!!}</a></td>
                                    <td class="text-center">
                                        <a class="btn btn-warning" href="{{route('features.edit',$feature->id)}}">ویرایش</a>
                                        <a class="btn btn-danger" href="{{route('features.delete',$feature->id)}}">حذف</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                <!-- /.table-responsive -->
                    <div class="center-block text-center">{{ $features->links() }}</div>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
@endsection
