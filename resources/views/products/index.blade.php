@extends('layouts.app')

@section('title', 'All Products')

@section('content')

<div class="clearfix">
        <h1>Our Products
                <a class="to-right btn" href="{{ route('products.create') }}">Add Product</a>
            </h1> 
        
</div>
<div class="row">
    @for ($i = 0; $i < 10; $i++)
    <a href="{{ route('products.show', ['id' => $i]) }}" class="col">
        <div class="card">
            <div class="card-image" style=" background-image: url(https://unsplash.it/800/600?image=82);">
            </div>
            <div class="card-content">
                <button class="card-fab fab"><i class="mdi mdi-cart-plus"></i></button>
                <div class="card-title">Product Name</div>
                <?php $string = 'There are 3 main button types described in material design. The raised button is a standard button that signify actions and seek to give depth to a mostly flat page. The floating circular action button is meant for very important functions' ?>
                <p class="card-text">{{ str_limit($string, 100, $end = '...') }}</p>
                <p><b>Ksh</b> 5,900</p>
            </div>
        </div>
    </a>
    @endfor
    
</div>


@endsection
