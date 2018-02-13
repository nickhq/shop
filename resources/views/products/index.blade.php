@extends('layouts.app')

@section('title', 'All Products')

@section('content')
<h1>Our Products</h1>
<div class="cards">
    <a href="#" class="cards-item">
        <div class="card">
        <div class="card-image" style=" background-image: url(https://unsplash.it/800/600?image=82);"></div>
        <div class="card-content">
            <div class="card-title">Flex</div>
            <p class="card-text">This is the shorthand for flex-grow, flex-shrink and flex-basis combined. The second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
        </div>
        </div>
    </a>
    
</div>



@endsection