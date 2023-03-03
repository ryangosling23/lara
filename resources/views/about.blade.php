@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="d-flex justify-content-center">
            <div>
                <p><h2>TRUE GAMES</h2></p>

                <p><h2>Мы самые лютые самые лучшие</h2></p>
            </div>
        </div>
    </div>
<hr>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner justify-content-center">
            @foreach($prod as $obprod)
                @if($loop->first)
                    <div class="carousel-item active">
                        @else
                            <div class="carousel-item ">
                                @endif
                                <img src="{{$obprod->img}}" class="w-10 h-20 d-block carousel-img"
                                     alt="...">
                                <p class="d-flex justify-content-around">{{$obprod->name}}</p>
                            </div>

                            @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
        </div>
</div>

@endsection
