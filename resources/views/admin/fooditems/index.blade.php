@extends('layouts.admin')

@section('main-content')

<article id="food-item-index" class="container">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="title-section p-4 text-center mb-5">
        <h1 class="mb-0">
          Il tuo menu:
        </h1>
      </div>
      @if ($foodItems->isEmpty())
          <div class="col-12 text-center">
            <a href="{{ route('admin.fooditems.create') }}" class="btn btn-primary">Aggiungi il tuo primo piatto!</a>
          </div>
      @else
        <div class="col-12 mb-3">
          <a href="{{ route('admin.fooditems.create') }}" class="btn btn-primary">Aggiungi un nuovo piatto</a>
        </div>
        @foreach($foodItems as $foodItem)
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card food-card mb-3 my_card d-flex flex-column" id="my_wrapper">
              <div class="food-card_img @if ($foodItem->available == 0) no_available @endif">
                @if (str_starts_with($foodItem->image_url, 'http'))
                <img class="card-img-top img-fluid rounded-start zoom" src="{{ $foodItem->image_url }}" alt="{{ $foodItem->name }} Image">
                @else
                <img class="card-img-top img-fluid rounded-start zoom" src="{{ asset('storage') . '/' . $foodItem->image_url }}" alt="{{ $foodItem->name }} Image">
                @endif
              </div>
              <div class="card-body d-flex flex-column justify-content-between">
                <div>
                  <h3 class="card-title">{{ $foodItem->name }}</h3>
                  <p class="card-text"><strong>Descrizione: </strong> {{ $foodItem->description }}</p>
                  <p class="card-text"> <strong> Ingredienti: </strong>{{ $foodItem->ingredients }}</p>
                  <p>
                    <strong>Disponibile: </strong>
                    @if ($foodItem->available == 1)
                        <i class="fa-solid fa-circle-check"></i>
                    @else
                        <i class="fa-solid fa-circle-xmark"></i>
                    @endif
                </p>              </div>
                <div class="mt-auto">
                  <hr>
                  <p class="card-text"><strong> Prezzo: </strong> {{ $foodItem->price }} €</p>
                  <div class="d-flex justify-content-center">
                    <a href="{{ route('admin.fooditems.show', $foodItem) }}" class="btn btn-success my_button">Mostra</a>
                    <a href="{{ route('admin.fooditems.edit', $foodItem) }}" class="btn btn-warning mx-1 my_button">Modifica</a>
                    <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $foodItem->id }}">Elimina</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- Delete modal --}}
          <div class="modal fade" id="exampleModal-{{ $foodItem->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title fs-5" id="exampleModalLabel">Elimina</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Sicuro di voler eliminare?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                  <form action="{{ route('admin.fooditems.destroy', $foodItem) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      @endif
    </div>
  </div>
</article>


@endsection
<style>
    body{
      background-image: url('https://wallpapers.com/images/featured/food-table-background-1j6ik0elenqlwh4k.jpg')
    }

</style>