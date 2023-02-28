@extends('layouts.app')

@section('content')

<div class="container">

    <div class="d-flex justify-content-center">
        <h2>КАТАЛОГ</h2>


    </div>

    <div class="dropdown mb-5">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Список
        </button>
        <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">Игры</a></li>
          <li><a class="dropdown-item" href="#">Консоли</a></li>
          <li><a class="dropdown-item" href="#">Аксесуары</a></li>
        </ul>
      </div>


    <div class="row">
        @foreach ($prod as $obprod)
        <div class="col-md-3">
                <div class="card h-100" style="width: 18rem;">
                    <img class="card-img-top h-100" src="{{$obprod->img}}" src="..." alt="cardimg">
                    <div class="card-body">
                        <h5 class="card-title">{{$obprod->name}}</h5>
                    <p class="card-text">Цена: {{$obprod->price}}руб</p>
                    <a href="#" class="btn btn-primary">Купить</a>
                    </div>
                </div>
        </div>
        @endforeach
    </div>


</div>

@endsection

