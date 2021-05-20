@extends('Admin.layout.master')

@section('content')
    <section class="content" style="direction: rtl">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">تنوع ها</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @if(Session::has('varietes_success'))
                    <div class="alert alert-success">
                        <div>{{Session('varietes_success')}}</div>
                    </div>
                @elseif(Session::has('varietes_error'))
                    <div class="alert alert-danger">
                        <div>{{Session('varietes_error')}}</div>
                    </div>
                @endif
                <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th class="text-center">شناسه</th>
                                <th class="text-center">کد تنوع</th>
                                <th class="text-center">نام تنوع</th>
                                <th class="text-center">نام محصول</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($varieties as $variety)
                                <tr>
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td class="text-center">{{$variety->sku}}</td>
                                    <td class="text-center">{{$variety->title}}</td>
                                    <td class="text-center">{{$variety->product->title}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-warning" href="{{route('varietes.edit',$variety->id)}}">ویرایش</a>
                                        <a class="btn btn-danger" href="{{route('varietes.delete',$variety->id)}}">حذف</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                <!-- /.table-responsive -->
                    <div class="center-block text-center">{{ $varieties->links() }}</div>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
@endsection
