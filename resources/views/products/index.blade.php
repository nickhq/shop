@extends('layouts.app')

@section('title', 'All Products')

@section('content')

    <div class="clearfix">
        <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
        <h1>Our Products
            <a class="to-right btn" href="{{ route('products.create') }}">Add Product</a>
        </h1>

    </div>
    <div class="row">
        @foreach ($products as $product)
            <a href="{{ route('products.show', ['id' => $product->id ]) }}" class="col">
                <div class="card">
                    <div class="card-image" style=" background-image: url({{asset('uploads')}}/{{ $product->image }});">
                    </div>
                    <div class="card-content">
                        <button class="card-fab fab"><i class="mdi mdi-cart-plus"></i></button>
                        <div class="card-title">{{ $product->name }}</div>
                        <p class="card-text">{{ str_limit($product->description, 100, $end = '...') }}</p>
                        <p><b>Ksh</b> {{ $product->price }}</p>
                    </div>
                </div>
            </a>
        @endforeach

    </div>


@endsection
