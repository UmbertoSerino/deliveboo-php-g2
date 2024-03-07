@extends('layouts.admin')

@section('main-content')
<div class="container">
  <form method="POST" action="{{ route('admin.fooditems.store') }}" >
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6 mb-3">
          <label for="name">Nome del piatto: </label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3 input-group">
          <label for="description" class="input-group-text">Descrizione del piatto:</label>
          <textarea class="form-control"  name="description" id="description" cols="15" rows="3"></textarea>
        </div>
      </div>
      <div class="form-row">
        <div class="mb-3 input-group">
          <label for="ingredients" class="input-group-text">Ingredienti:</label>
          <textarea class="form-control"  name="ingredients" id="ingredients" cols="15" rows="3"></textarea>
        </div>
        <div class="form-group col-md-6 mb-3">
          <label for="image_url">Immagine del piatto: </label>
          <input type="image_url" class="form-control" id="image_url" name="image_url">
        </div>
        <div class="form-group col-md-6 mb-3">
          <label for="price">Prezzo: </label>
          <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="invisible">
          <label for="restaurant_id" ></label>
          <input name="restaurant_id" value="{{ $restaurant['id'] }}">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Crea</button>
    </form>

</div>

  @endsection