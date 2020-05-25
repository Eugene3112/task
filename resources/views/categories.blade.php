@extends('layouts.master')

@section('title','Все категории')

@section('content')
    <div class="starter-template">
        @foreach($categories as $category)
        <div class="panel">
            <a href="{{route('category',$category ->code)}}">
                <img width="56px" src="{{$category ->image}}">
                <h2>{{$category ->name}}</h2>
            </a>
            <p>{{$category ->description}}</p>
        </div>
        @endforeach
    </div>
@endsection