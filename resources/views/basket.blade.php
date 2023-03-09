@extends('layouts.app')

@section('content')

<div class="container">
   
        <div class="d-flex justify-content-center mb-3"><h2>КОРЗИНА</h2></div>
            <div class="row">  
                @foreach ($p as $j)
                <div class="col-md-3 pb-5" >
                    <div class="card mb-3 h-100" style="width: 18rem;">

                    <img src="{{$j->products->img}}" class="card-img-top h-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Название: {{ $j->products->name}}</h5>
                            <p class="card-text">Цена: {{ $j->products->price}}</p>
                        <button type="submit" class="btn btn-primary">
                            <a href="/public/basket/{{$j->id}}/delete" class="btn btn-primary">удалить</a>
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <a href="#" class="btn btn-primary">купить</a>
                        </button>
                            </div>
                        </div>
                    </div>
                @endforeach 
            
            </div>




    

</div>





@endsection
