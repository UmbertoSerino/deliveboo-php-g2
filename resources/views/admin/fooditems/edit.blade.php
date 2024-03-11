@extends('layouts.admin')

@section('main-content')
<div class="container">
    <form action="{{ route('admin.fooditems.update', $foodItem->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nome Piatto: </label>
              <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $foodItem->name) }}">
            </div>
            <div class="form-group col-md-6">
              <label for="ingredients">Ingredienti: </label>
              <input type="text" class="form-control" id="ingredients" minlength="9" name="ingredients" value="{{ old('ingredients', $foodItem->ingredients) }}">
            </div>
          </div>
          <div class="form-group">
            <label for="description">Descrizione:</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $foodItem->description) }}">
          </div>
          <div class="form-group">
            <label for="price">Prezzo: </label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $foodItem->price) }}">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="image_url">Immagine del Piatto: </label>
              <input type="image_url" class="form-control" id="image_url" name="image_url" value="{{ old('image_url', $foodItem->image_url) }}">
            </div>
          </div>
          <button type="submit" class="btn btn-primary mt-3">Modifica</button>
      </form>
</div>
@endsection