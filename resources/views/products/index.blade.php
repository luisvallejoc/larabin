@extends('layout.master')

@section('content')
<h1>Listado de productos</h1>

    @empty($products)
    <div class="alert alert-warning">
        The list of products is empty
    </div>
    @else
    <div class="table-responsive">
        <table class="table table-stripe">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Tittle</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Statusk</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product->status}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    @endempty

@endsection