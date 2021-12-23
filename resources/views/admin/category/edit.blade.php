@extends('layouts.admin')
@section('content')
    <form action="{{route ('admin.category.update', ['category'=>$category])}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="text" name="name" value="{{$category->name}}">
        <br>

        <button type="submit" class="btn-success btn btn-sm">Send</button>
    </form>
@endsection

s
