@extends('layouts.master')

@section('title','Главная')

@section('content')
    <div class="starter-template">

    <div class="row">
    @foreach($products as $product)
        @include('layouts.card', compact('product'))
    @endforeach
        
    </div>
    
    </div>
@endsection
