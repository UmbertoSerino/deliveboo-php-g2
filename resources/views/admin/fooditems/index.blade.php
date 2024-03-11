@extends('layouts.admin')
@section('main-content')

  <div class="container">
    <div class="row">
      <h1 class="mb-5 text-center">
        Qui sono disponibili tutti i piatti del ristorante di: {{ Auth::user()->name }} 
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
                <td> 
                  <div class="col-6 d-flex">
                      <a href="{{ route('admin.fooditems.show', $foodItem) }}" class="btn btn-primary">Mostra piatto</a>

                      <a href="{{ route('admin.fooditems.edit', $foodItem) }}" class="btn btn-success">Modifica piatto</a>

                      <form class="d-inline-block"  action="{{ route('admin.fooditems.destroy', $foodItem) }}" method="POST" data-fooditem-name="{{ $foodItem['name'] }}">
                          @csrf
                          @method('DELETE')

                          <button class="btn btn-danger" >
                              Elimina
                          </button>
                      </form>
                  </div>
                </td>
                @empty
                <td> Non ci sono piatti al momento {{ Auth::user()->name }} </td>
                @endforelse 
              </tr>
            </tbody>
          </table>
          <div class="col-12 text-center mt-3">
            <a href="{{ route('admin.fooditems.create') }}" class="btn btn-primary">Aggiungi un nuovo piatto</a>
          </div>
    </div>
  </div>

@endsection