@extends('layouts.admin')
@section('main-content')

<div class="container">
    <div class="row">
      <h1 class="mb-5 text-center">
        Il tuo menu:
      </h1>

          <table class="table">
            <thead>
              <tr>
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
                <td>{{ $foodItem->name }}</td>
                <td> {{$foodItem->description}}</td>
                <td>{{ $foodItem->ingredients }}</td>
                <td>{{ $foodItem->price }} €</td>
                <td>{{ $foodItem->image_url }} </td>
                <td>{{ $foodItem->created_at }} </td>
                
                @empty
                <td> Non ci sono piatti al momento {{ Auth::user()->name }} </td>
                @endforelse 
              </tr>
            </tbody>
          </table> 
          <div class="col-12 text-center">
              <a href="{{ route('admin.fooditems.create') }}" class="btn btn-primary">Aggiungi un nuovo piatto</a>
          </div>      
        </div>
      </div>
    </div>
  </div>

@endsection