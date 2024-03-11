@extends('layouts.admin')

@section('main-content')
<div class="container">
  <form method="POST" action="{{ route('admin.restaurants.store') }}" >
    @csrf
    <h1>
      Inserisci i dati per creare il tuo ristorante
    </h1>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Nome Ristorante: </label>
          <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$restaurant->name) }}">
        </div>
        <div class="form-group col-md-6">
          <label for="piva">Partita Iva: </label>
          <input type="text" class="form-control" id="piva" minlength="10" maxlength="11" name="vat" value="{{ old('vat',$restaurant->vat) }}">
        </div>
      </div>
      <div class="form-group">
        <label for="address">Indirizzo</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ old('address',$restaurant->address) }}">
      </div>
      <div class="form-group">
        <label for="phone_number">Numero di telefono: </label>
        <input type="tel" class="form-control" id="phone_number" placeholder="3xx xxxxxxx" minlength="9" maxlength="10" name="phone_number" value="{{ old('phone_number',$restaurant->phone_number) }}">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Email: </label>
          <input type="email" class="form-control" id="email" name="email" value="{{ old('email',$restaurant->email) }}">
        </div>
        <div class="form-group col-md-6">
          <label for="image_url">Logo: </label>
          <input type="image_url" class="form-control" id="image_url" name="image_url" value="{{ old('image_url',$restaurant->image_url) }}">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Crea</button>
    </form>

</div>

  @endsection