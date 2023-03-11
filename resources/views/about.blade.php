@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-2">
                <h2>TRUE GAMES</h2>
            </div>
            <div class="col-10">
                <h2>Мы самые лютые самые лучшие</h2>
            </div>
        </div>
        <hr>
        <div id="carouselExampleControls" class="carousel slide mt-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($prod as $pp)
                @if($loop->first)
                <div class="carousel-item active">
                    @else
                    <div class="carousel-item">
                        @endif
                        <img src="{{url('/img')}}/{{ $pp->img }}" class="d-block mx-auto carousel-img" alt="tovar">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="name_tovar">{{ $pp->name }}</h1>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        @endsection

        {{-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner justify-content-center">
                @foreach ($prod as $obprod)
                    @if ($loop->first)
                        <div class="carousel-item active">
                    @else
                        <div class="carousel-item ">
                    @endif
                    <img src="{{ $obprod->img }}" class="w-100 d-block carousel-img" alt="...">
                    <p class="d-flex justify-content-around">{{ $obprod->name }}</p>
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
@endsection--}}
