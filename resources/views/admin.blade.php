@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center">
    <a class="btn btn-success mb-3" href="{{url('/admin/product')}}" role="button">Добавить товар</a><!--Кнопка на создание товара-->
    </div>
    <div class="row row-cols-2">
        @foreach ($prod as $p) <!--вывод товара-->
        <div class="col mb-3">
            <div class="card h-100">
                <div class="card-body w-100">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-4 ">
                            <img src="{{url('/img')}}/{{ $p->img }}" class="d-block w-100 " alt="tovar"><!--вывод изображения товара с базы-->
                        </div>
                            <h1>Название: {{ $p->name }}</h1><!--вывод имени товара с базы-->
                            <h3>Цена: {{ $p->price }}</h3><!--вывод цены товара с базы-->
                            <h5>Страна: {{ $p->country }}</h5><!--вывод страны-производителя товара с базы-->
                            <h5>Год: {{ $p->year }}</h5><!--вывод года выпуска товара с базы-->
                            <h5>Модель: {{ $p->model }}</h5><!--вывод модель товара с базы-->
                            <h5>Количество: {{ $p->colvo }}</h5><!--вывод модель товара с базы-->
                            <div class="">
                                <a role="button" href="{{url('/admin/product/delete/')}}/{{$p->id}}" class="btn btn-warning mx-1 mt-2">Удалить</a> <!--удалить товар-->
                            </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="text-center">
        <a class="btn btn-success mb-3" href="{{url('/admin/category')}}" role="button ">Добавить категорию</a><!--Кнопка на добавление категории-->
    </div>
    <div class="row row-cols-2">
        @foreach ($cat as $c) <!--вывод категорий-->
        <div class="col mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row">
                        <div class="text-center">
                            <h1>{{ $c->name }}</h1><!--вывод имени товара с базы-->
                        </div>
                            <a role="button" href="{{url('/admin/category/delete/')}}/{{$p->id}}" class="btn btn-warning mx-1 mt-2">
                            Удалить
                            </a> <!--удалить товар-->
                        
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
