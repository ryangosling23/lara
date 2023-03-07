@extends('layouts.app')

@section('content')

<div class="container">

    <div class="d-flex justify-content-center">Корзина</div>

    <div class="">

        @foreach ($p as $j)
            <div class="catalog-item">

                <img src="{{$j->}}" alt="">



            </div>
        @endforeach


    </div>





















</div>





@endsection
