@extends('layouts.app')

@section('title', 'Add New Product')

@section('content')

<h1>Add A New Product</h1>

<div id="app" class="create-form">
    <form action="{{ route('products.store') }}" method="post">
            {{ csrf_field() }}
        <div class="form">
            <input type="text" name="product_name" id="name" class="input" placeholder="Product Name">
            <span class="focus-line"></span>
        </div>
        <div class="form">
            <input type="number" name="product_price" id="price" class="input" placeholder="Product Price">
            <span class="focus-line"></span>
        </div>
        <label for="file">Product Image</label>
        <div class="form file-drop-area">
            
            <span class="btn btn-file">Choose files</span>
            <span class="file-msg js-set-number">or drag and drop files here</span>
            <input name="product_image" class="input file-input" type="file">
        </div>
        <div class="form">
            <textarea type="text" name="product_description" id="description" rows="5" class="input" placeholder="Briefly describe the product..."></textarea>
            <span class="focus-line"></span>
        </div>
        <div class="form">
            <button class="btn" type="submit">Add Product</button>
        </div>
    </form>
</div>

@endsection