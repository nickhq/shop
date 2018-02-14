@extends('layouts.app')

@section('title', 'The Product')

@section('content')


<div class="content">
    <div class="product">
        <div class="product-image">
            <img src="{{ asset('uploads') }}/{{ $product->image }}" alt="Product Image">
        </div>
        <div class="product-content">
            <h1 class="product-title">{{ $product->name }}</h1>
            <div class="product-meta">
                <span class="price"><b>Ksh</b> {{ $product->price }}</span>
                <button class="btn">Edit <span class="mdi mdi-pencil"></span></button>
                <form class="form-inline" action="{{ route('products.destroy', ['id' => $product->id]) }}" method="post">
                    {{ csrf_field() }}
                    {{--  lets pretend that we are sending a DELETE request  --}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn"><span class="mdi mdi-delete"></span> Delete</button>
                </form>
                
                
            </div>
            <p class="product-description">{{ $product->description }}</p>
        </div>
    </div>
</div>
<link rel="stylesheet" href="//cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">

@endsection()