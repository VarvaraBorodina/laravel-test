@extends('layouts.admin')

@section('content')
    <div class="content-box-large">
        <div class="panel-heading">
                <h3>id: {{$product->id}}</h3>
                <h3>Name: {{$product->name}} </h3>
                <h3>Content: {{$product->content}}</h3>
                <h3>Status: {{$product->status}}</h3>
                <h3>Brand id: {{$product->brand_id}}</h3>
                <h3>Price: {{$product->price}}</h3>
            <img src="{{$product->img}}" width="200px">
        </div>
    </div>
@endsection


