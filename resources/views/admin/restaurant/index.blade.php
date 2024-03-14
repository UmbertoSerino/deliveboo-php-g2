@extends('layouts.admin')
@section('main-content')

<div id="restaurant-index" class="container">
  <div class="row">
    @if ($restaurants->isEmpty())
      <div class="col-12 text-center">
          <a href="{{ route('admin.restaurants.create') }}" class="btn btn-primary">Inserisci Ristorante</a>
      </div>
      @else
      {{-- inizio card --}}
      @foreach ($restaurants as $restaurant)
        
      <div class="col-12">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ $restaurant->image_url }}" class="img-fluid rounded-start" alt="{{ $restaurant->name }} Image">
          </div>
          <div class="col-md-8">
            <div class="card-body d-flex justify-content-between">
              <div>

                <h5 class="card-title">Ristorante "{{ $restaurant->name }}"" di {{ $restaurant->user->name }} {{ $restaurant->user->last_name }} </h5>
  
                <p class="card-text">Recapito ristorante: {{ $restaurant->email }}, {{ $restaurant->phone_number }}</p>
                <p class="card-text">Indirizzo: {{ $restaurant->address }}</p>
                <p class="card-text">Partita Iva: {{ $restaurant->vat }}</p>
                <p class="card-text">Recapito titolare: {{ $restaurant->user->email }}</p>
                <p class="mt-2">Categorie:</p>
                @foreach ($restaurant->categories as $categoryy)
                <span class="badge">{{ $categoryy->name }}</span>
                @endforeach
              </div>
              <div>
                <a href="{{ route('admin.restaurants.edit', $restaurant->id) }}" class="btn btn-primary mb-3">Modifica</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="col-12">
      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Menù</h5>
              <p class="card-text">Aggiungi e aggiorna le tue pietanze</p>
                  <div class="col-12 d-flex">
                      <a href="{{ route('admin.fooditems.create', $restaurant) }}" class="btn btn-primary me-1">Aggiungi piatto</a>
                      <a href="{{ route('admin.fooditems.index', $restaurant) }}" class="btn btn-warning">I miei Piatti</a>
                  </div>
              
              
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ordini</h5>
              <p class="card-text">Tieni sott'occhio le ordinazioni nel tuo ristorante</p>
              <a href="#" class="btn btn-primary">I miei ordini</a>
            </div>
          </div>
        </div>
      </div>
    </div>
      @endif
  </div>
</div>

@endsection