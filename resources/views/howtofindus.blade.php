@extends('layouts.app')

@section('content')

<div class="container">

    <div class="d-flex justify-content-center">
        <h2>КАК НАС НАЙТИ</h2>
    </div>

    <div class="d-flex justify-content-center">
        <img src="{{ url('/img/map.jpg')}}" width="50%" height="50%" alt="">
    </div>

    <div class="d-flex justify-content-center">

        <div>
            <p>Улица Пушкина. Дом Колотушкино 77.</p>
            <p>Gmail@yandex.ru</p>
            <p>+7951-104-62-23</p>
        </div>
    </div>




</div>

@endsection

