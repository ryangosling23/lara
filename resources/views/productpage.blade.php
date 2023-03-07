@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-around">


<div class="card" style="width: 18rem;">

            @foreach($prod as $obprod)
                <img class="h-100" src="{{$obprod->img}}" alt="">
            @endforeach

<div class="card-body">
    
            @foreach($prod as $obprod)
                <h5 class="card-title">{{$obprod->name}}</h5>

        <p class="card-text">
                <h2>Цена: {{$obprod->price}}рублей.</h2>
            @if($obprod->colvo>0)
                <a href="#" class="btn btn-primary">В корзину</a>
            @else
                <a class="#" href="">НЕТ В НАЛИЧИИ</a>
            @endif
            @endforeach
        </p>

</div>

            <ul class="list-group list-group-flush">
            <li class="list-group-item">Дата производства: {{$obprod->year}}</li>
            <li class="list-group-item">Страна производитель: {{$obprod->country}}</li>
            <li class="list-group-item">Модель:{{$obprod->model}}</li>
            <li class="list-group-item">
                @if($obprod->colvo>0)
                    <p>В наличии: {{$obprod->colvo}}</p>
                @else
                    <p>Нет в наличии</p>
                @endif
            </li>
            </ul>



</div>
            </div>
        </div>
    </div>
@endsection
