@extends('layouts.admin')
@section('content')
    @dump($errors)
    <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name">
        <br>
        <input type="file" name="img">
        <br>
        <textarea name='content' cols="60" rows="5"></textarea>
        <br>
        <input type="number" name="price">
        <br>
        <input type="checkbox" name="status" value="1">
        <br>
        <button type="submit" class="btn-success btn btn-sm">Send</button>
    </form>
@endsection
