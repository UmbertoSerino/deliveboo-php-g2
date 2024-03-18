@extends('layouts.admin')
@section('main-content')

<article id="food-item-index" class="container">
  <div class="row">
    <h1 class="mb-5 text-center">
        Il tuo menu:
    </h1>
    @if ($foodItems->isEmpty())
        <div class="col-12 text-center">
          <a href="{{ route('admin.fooditems.create') }}" class="btn btn-primary">Aggiungi il tuo primo piatto!</a>
        </div>
    @else
      <div class="col-12 mb-3">
        <a href="{{ route('admin.fooditems.create') }}" class="btn btn-primary">Aggiungi un nuovo piatto</a>
      </div>
      @foreach($foodItems as $foodItem)
        <div class="col-3">
          <div class="food-card_img" id="available">
            <div class="row g-0">
              <div class="col-md-4">
                @if (str_starts_with($foodItem->image_url, 'http'))
                    <img class="img-fluid rounded-start" src="{{ $foodItem->image_url }}" alt="{{ $foodItem->name }} Image">
                @else
                <div class="col-12 d-flex mb-3">
                    <img class="img-fluid rounded-start" alt="{{ $foodItem->name }} Image"
                        src="{{ asset('storage') . '/' . $foodItem->image_url }}">
                </div>
                @endif
              </div>
              <div class="food-card_content">
                <div class="food-card_title-section">
                  <p class="food-card_title">{{ $foodItem->name }}</p>
                  <p class="food-card_author">Descrizione: {{$foodItem->description}}</p>
                  <p class="food-card_author">Ingredienti: {{ $foodItem->ingredients }}</p>
                </div>
                <div class="food-card_bottom-section">
                  <div class="space-between">
                    <div class="mt-3">
                      <span class="fa fa-fire">Disponibile: 
                        @if ($foodItem->available == 1)
                          Si
                        @else
                          No
                        @endif
                      </span>
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
                  <div class="d-flex justify-content-center">
                    <a href="{{ route('admin.fooditems.show', $foodItem) }}" class="btn btn-success">Mostra</a>
                    <a href="{{ route('admin.fooditems.edit', $foodItem) }}" class="btn btn-warning mx-1">Modifica</a>
                    <a class="btn btn-danger" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $foodItem->id }}">Elimina</a>
                      {{-- Delete modal --}}
                    <div class="modal fade" id="exampleModal-{{ $foodItem->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina</h1>
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    @endif
  </div>
</article>
@endsection
