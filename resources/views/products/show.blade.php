@extends('layouts.app')

@section('title', 'The Product')

@section('content')


<div class="content">
    <div class="product">
        <div class="product-image">
            <img src="https://unsplash.it/1200/600?image=82" alt="">
        </div>
        <div class="product-content">
            <h1 class="product-title">Product Title</h1>
            <div class="product-meta">
                <span class="price"><b>Ksh</b> 500</span>
                <button class="btn">Buy Now <span class="mdi mdi-cart-plus"></span></button>
                <a href="#" class="favourite"><span class="mdi mdi-star"></span> Add to Favourites</a>
                
                
            </div>
            <p class="product-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem distinctio saepe similique obcaecati. Repellat voluptatibus distinctio numquam quam quibusdam, vitae saepe rerum consequatur, quis ex aperiam accusantium ab inventore sint.</p>
        </div>
    </div>
</div>
<link rel="stylesheet" href="//cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">

@endsection()