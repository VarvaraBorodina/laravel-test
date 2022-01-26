@extends('layouts.shop_layout')

@section('content')
    <h1>Wish List</h1>
    @foreach($productList as $name=>$amount)
    <p>{{$name}} : {{$amount}}</p>
    @endforeach
@endsection
