@extends('layouts.admin')

@section('content')
    <div class="content-box-large">
        <div class="panel-heading">
                <h3>id: {{$category->id}}</h3>
                <h3>Name: {{$category->name}} </h3>
                <h3>Status: {{$category->status}}</h3>
        </div>
    </div>
@endsection


