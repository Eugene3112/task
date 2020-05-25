@extends('layouts.master')

@section('title','товар')

@section('content')
    <div class="starter-template">
    <h1>Stiven King</h1>
    <h2>Книги</h2>
    <p>Цена: <b>25 руб</b></p>
    <img src="/img/Stiven_King.jpg">
    <p>Институт</p>

            <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

            <input type="hidden" name="_token" value="baR4zNpF9BNSdzyr9HjXElvkoCwpOlroF0wGRwa7">        </form>
        </div>
@endsection