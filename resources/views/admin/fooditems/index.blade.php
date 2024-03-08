@extends('layouts.admin')
@section('main-content')

<div id="food-item-index" class="container">
    <div class="row">
      <h1 class="mb-5 text-center">
        Il tuo menu:
      </h1>

      {{-- condizione: se non ci sono piatti --}}

      @if ($foodItems->isEmpty())
      <div class="col-12 text-center">
          <a href="{{ route('admin.fooditems.create') }}" class="btn btn-primary">Aggiungi subito il tuo primo piatto!</a>
      </div>
      
      @else
      {{-- Se è presente almeno un piatto: --}}

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
              </div>
          </div>
      </div>
      </div>
      @endforeach
      

      @endif




      

          {{-- <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Piatto</th>
                <th scope="col">descrizione</th>
                <th scope="col">ingredienti</th>
                <th scope='col'>prezzo</th>
                <th scope='col'>immagine</th>
                <th scope="col">Aggiunto il:</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($foodItems as $foodItem )
              <tr>
                <th scope="row">{{ $foodItem->id }}</th>
                <td>{{ $foodItem->name }}</td>
                <td> {{$foodItem->description}}</td>
                <td>{{ $foodItem->ingredients }}</td>
                <td>{{ $foodItem->price }} €</td>
                <td>{{ $foodItem->image_url }} </td>
                <td>{{ $foodItem->created_at }} </td>
                <td> 
                 
                </td>
                @empty
                <td> Non ci sono piatti al momento {{ Auth::user()->name }} </td>
                @endforelse 
              </tr>
            </tbody>
          </table>  --}}      
        </div>
      </div>
    </div>
  </div>

@endsection