@extends('layouts.app')

@section('content')
<h1>Edit a product</h1>

<form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
    @csrf
    @method('PUT')
    <div class="form-row">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" required value="{{ old('title') ?? $product->title }}">
    </div>
    <div class="form-row">
        <label for="description">Description</label>
        <input type="text" class="form-control" name="description" required  value="{{  old('description') ?? $product->description}}">
    </div>
    <div class="form-row">
        <label for="price">Price</label>
        <input type="text" class="form-control" min="1.00" step="0.01" name="price" required value="{{  old('price') ?? $product->price}}">
    </div>
    <div class="form-row">
        <label for="stock">Stock</label>
        <input type="text" class="form-control" min="0" name="stock" required  value="{{  old('value') ?? $product->stock}}">
    </div>
    <div class="form-row">
        <label for="status">Status</label>
        <select name="status" class="custom-select" required>
            <option {{ old('status') == 'available' ? 'selected' : ($product->status == 'available' ? 'selected' : '') }} value="available" selected>Available</option>
            <option {{ old('status') == 'unavailable' ? 'selected' : ($product->status == 'unavailable' ? 'selected' : '') }} value="unavailable" selected>Unavailable</option>
        </select>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary btn-lg">Edit product</button>
    </div>
</form>
@endsection