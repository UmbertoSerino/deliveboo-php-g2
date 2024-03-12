@extends('layouts.admin')
@section('main-content')

<div id="food-item-index" class="container">
    <div class="row">
      <h1 class="mb-5 text-center">
        Il tuo menu:
      </h1>

      @if ($foodItems->isEmpty())
      <div class="col-12 text-center">
          <a href="{{ route('admin.fooditems.create') }}" class="btn btn-primary">Aggiungi subito il tuo primo piatto!</a>
      </div>
      
      @else

      <div class="col-12 mb-3">
        <a href="{{ route('admin.fooditems.create') }}" class="btn btn-primary">Aggiungi un nuovo piatto</a>
      </div>
      @foreach($foodItems as $foodItem )
        <div class="col-3">
          <div class="food-card">
            <div class="food-card_img">
                <img src="{{ $foodItem->image_url }}" alt="" >
            </div>
            <div class="food-card_content">
                <div class="food-card_title-section">
                    <p class="food-card_title">{{ $foodItem->name }}</p>
                    <p class="food-card_author">{{$foodItem->description}}</p>
                    <p class="food-card_author">{{ $foodItem->ingredients }}</p>
                </div>
                <div class="food-card_bottom-section">
                    <div class="space-between">
                        <div class="mt-3">
                            <span class="fa fa-fire">Disponibile:</span>
                        </div>
                        <div class="pull-right">
                            <span class="badge badge-success">Veg</span>
                        </div>
                    </div>
                    <hr>
                    <div class="space-between">
                        <div class="food-card_price">
                            <span>{{ $foodItem->price }} €</span>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-end">
                      <a href="{{ route('admin.fooditems.show', $foodItem) }}" class="btn btn-success">Mostra</a>
                      <a href="{{ route('admin.fooditems.edit', $foodItem) }}" class="btn btn-warning mx-1">Modifica</a>
                      <form  action="{{ route('admin.fooditems.destroy', $foodItem) }}" method="POST" data-fooditem-name="{{ $foodItem['name'] }}">
                        @csrf
                        @method('DELETE')
  
                        <button class="btn btn-danger" >
                            Elimina piatto
                        </button>
                    </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
      @endforeach
      @endif
      
        </div>
      </div>
    </div>
  </div>

@endsection