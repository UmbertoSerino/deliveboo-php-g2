@extends('layouts.admin')
@section('main-content')

<div class="container">
    <div class="row">
      @if ($restaurants->isEmpty())
      <div class="col-12 text-center">
          <a href="{{ route('admin.restaurants.create') }}" class="btn btn-primary">Inizializza Ristorante</a>
      </div>
      @else
      {{-- inizio card --}}
      @foreach ($restaurants as $restaurant)
        
      <div class="col-12">
      <div class="card mb-3" style="">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ $restaurant->image_url }}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body d-flex justify-content-between">
              <div>

                <h5 class="card-title">Ristorante "{{ $restaurant->name }}"" di {{ $restaurant->user->name }} {{ $restaurant->user->last_name }} </h5>
  
                <p class="card-text">Recapito ristorante: {{ $restaurant->email }}, {{ $restaurant->phone_number }}</p>
                <p class="card-text">Indirizzo: {{ $restaurant->address }}</p>
                <p class="card-text">Partita Iva: {{ $restaurant->vat }}</p>
                <p class="card-text">Recapito titolare: {{ $restaurant->user->email }}</p>
              </div>
              <div>
                <a href="{{ route('admin.restaurants.edit', $restaurant->id) }}" class="btn btn-primary">Modifica</a>
                {{-- <form action="{{ route('admin.restaurant.edit') }}" method="PUT">
                  @csrf
                  @method('PUT')
                  <button class="btn btn-primary" type="submit">Modifica</button>
                </form> --}}
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
              
              <form action="{{ route('admin.fooditems.index') }}" method="GET">
                @csrf
                <button class="btn btn-primary" type="submit">I miei piatti</button>
              </form>
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
    </div>
  </div>

@endsection