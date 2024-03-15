@extends('layouts.admin')

@section('head-title')
    @yield('page-title')
@endsection

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                {{--Validation --}}
                @include('partials.errors')
                {{-- Form Body --}}
                <form action="@yield('form-action')" method="POST" enctype="multipart/form-data">
                    @csrf
                    @yield('form-method')
                    <div class="form-row">
                        {{-- Name --}}
                        <div class="form-group col-md-6">
                          <label for="name">Nome Piatto: </label>
                          <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $foodItem->name) }}">
                        </div>
                        
                        {{-- ingredienti --}}
                        <div class="form-group col-md-6">
                          <label for="ingredients">Ingredienti: </label>
                          <input type="text" class="form-control" id="ingredients" minlength="9" name="ingredients" value="{{ old('ingredients', $foodItem->ingredients) }}">
                        </div>
                        {{-- Descrizione --}}
                        <div class="form-group">
                          <label for="description">Descrizione:</label>
                          <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $foodItem->description) }}">
                        </div>
                        {{-- Prezzo --}}
                        <div class="form-group">
                          <label for="price">Prezzo: </label>
                          <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $foodItem->price) }}">
                        </div>
                        {{-- Disponibilità --}}
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="available" id="not_available" value="0">
                          <label class="form-check-label" for="available">
                              Non Disponibile
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="available" id="available" value="1">
                          <label class="form-check-label" for="available">
                              Disponibile
                          </label>
                        </div>
                        {{-- Immagine --}}
                        <div class="form-row">
                          <div class="form-group">
                            <label for="image">Inserire un'immagine del ristorante</label>
                            <input type="file" class="form-control" id="image_url" name="image_url" value="{{ old('image_url', $foodItem->image_url)}}">
                          </div>
                          {{--Preview image: --}}
                        <div class="mb-3 input-group">
                          <img src="" alt="Image preview" class="d-none img-fluid" id="image-preview">
                      </div>
                      </div>
                        {{-- Passare automaticamente resturant_id --}}
                        <div class="invisible">
                          <label for="restaurant_id"></label>
                          <input type="text" name="restaurant_id" value="{{  $restaurant ['id'] }} ">
                        </div>
                        {{-- Buttons --}}
                        <div class="mb-3 input-group">
                          <button type="submit" class="btn btn-xl btn-primary">
                              @yield('page-title')
                          </button>
                          <button type="reset" class="btn btn-xl btn-warning">
                              Reset all fields
                          </button>
                      </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Script for preview image url --}}
<script>
  document.getElementById('image_url').addEventListener('change', function(event){
  const imageElement = document.getElementById('image-preview');
  imageElement.classList.remove('d-none');
});
// Script per evidenziare i campi obbligatori
  const inputFields = document.querySelectorAll('.obligate');
  const spanElements = document.querySelectorAll('.required-indicator');
  inputFields.forEach((inputField, index) => {
  inputField.addEventListener('input', () => {
    if (inputField.value.trim() !== '') {
      spanElements[index].classList.add('invisible');
    } else {
      spanElements[index].classList.remove('invisible');
    }
  });
});
    </script>
@endsection