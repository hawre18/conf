@extends('frontend.layout.master')


@section('content')
    <div >
        <div >
            <product-component :category="{{$category}}"></product-component>
        </div>
    </div>

@endsection
