@extends('layouts.admin')

@section('main-content')
<div class="container">
  <form method="POST" action="{{ route('admin.restaurants.store') }}" >
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Nome Ristorante: </label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group col-md-6">
          <label for="piva">Partita Iva: </label>
          <input type="text" class="form-control" id="piva" minlength="9" maxlength="10" name="vat">
        </div>
      </div>
      <div class="form-group">
        <label for="address">Indirizzo</label>
        <input type="text" class="form-control" id="address" name="address">
      </div>
      <div class="form-group">
        <label for="phone_number">Numero di telefono: </label>
        <input type="tel" class="form-control" id="phone_number" placeholder="3xx xxxxxxx" minlength="9" maxlength="10" name="phone_number">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Email: </label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group col-md-6">
          <label for="image_url">Logo: </label>
          <input type="image_url" class="form-control" id="image_url" name="image_url">
        </div>
      </div>
      <label for="categories" class="mb-2">Categorie:</label>
      <div>
      @foreach ($categories as $category)
          <input type="checkbox" name="categories[]" id="categories-{{ $category->id }}" value="{{ $category->id }}">
          <label class="me-2" for="categories-{{ $category->id }}">{{ $category->name }}</label>
          @endforeach
        </div>
      <button type="submit" class="btn btn-primary mt-3">Crea</button>
    </form>

</div>

  @endsection