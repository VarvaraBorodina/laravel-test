@extends('layouts.admin')

@section('content')
    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title">Responsive Tables</div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <a href="{{ route('admin.product.create') }}" class="bth btn-sm btn-success"> Create </a>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>id</th>
                        <th>Product Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$loop->iteration + (($products->currentPage() - 1) * $products->perPage())}}</td>
                            <td>{{$product->id}}</td>
                            <td>{{ $product->name }}</td>
                            <td></td>
                            <td class="">
                                <a href="{{route('admin.product.show', ['product'=>$product->id])}}" class="bth btn-sm btn-info">Показать</a>
                                <a href="{{route('admin.product.edit', ['product'=>$product->id])}}" class="bth btn-sm btn-warning">Редактировать</a>
                                <form action="{{route('admin.product.destroy', compact('product')) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $products->links() !!}
            </div>
        </div>
    </div>
@endsection


