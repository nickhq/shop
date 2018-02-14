@extends('layouts.app')

@section('title', 'Editing Product Details')

@section('content')

<h1>Edit Product Details</h1>

<div id="app" class="create-form">
    <edit-product v-bind:product="{{ $product }}">
</div>  

@endsection