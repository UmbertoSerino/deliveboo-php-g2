@extends('layouts.admin')

@section('main-content')
<div class="container">
  {{-- Form --}}
  <form method="POST" action="{{ route('admin.restaurants.store') }}" >
    @csrf
    <h1>
      Inserisci i dati per creare il tuo ristorante
    </h1>
      <div class="form-row">
        <div class="form-group col-md-6">
          @include('partials.errors')
          <label for="name">Nome Ristorante: </label>
          <input type="text" class="form-control obligate inline" id="name" name="name" value="{{ old('name',$restaurant->name) }}" >
          <span class="required-indicator">* campi obbligatori</span>
          {{-- @error('name.min')
              <span class="text-danger">{{ $message }}</span>
          @enderror --}}
      </div>
        <div class="form-group col-md-6">
          <label for="piva">Partita Iva: </label>
          <input type="text" class="form-control obligate" id="piva" name="vat" value="{{ old('vat',$restaurant->vat) }}" >
        <span class="required-indicator">* campi obbligatori</span>
        {{-- @error('vat')
        <span class="text-danger">{{ $message }}</span>
        @enderror --}}
        </div>
      </div>
      <div class="form-group">
        <label for="address">Indirizzo</label>
        <input type="text" class="form-control obligate" id="address" name="address" value="{{ old('address',$restaurant->address) }}" >
        <span class="required-indicator">* campi obbligatori</span>
        {{-- @error('address')
        <span class="text-danger">{{ $message }}</span>
        @enderror --}}
      </div>
      <div class="form-group">
        <label for="phone_number">Numero di telefono: </label>
        <input type="tel" class="form-control obligate" id="phone_number" name="phone_number" value="{{ old('phone_number',$restaurant->phone_number) }}" >
        <span class="required-indicator">* campi obbligatori</span>
        {{-- @error('phone_number')
        <span class="text-danger">{{ $message }}</span>
        @enderror --}}
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Email: </label>
          <input type="email" class="form-control obligate" id="email" name="email" value="{{ old('email',$restaurant->email) }}" >
        <span class="required-indicator">* campi obbligatori</span>
        {{-- @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror --}}
        </div>
        <div class="form-group col-md-6">
          <label for="image_url">Logo: </label>
          <input type="image_url" class="form-control obligate" id="image_url" name="image_url" value="{{ old('image_url',$restaurant->image_url) }}" >
          <span class="required-indicator">* campi obbligatori</span>
        </div>
      </div>
      <label for="categories" class="mb-2">Categorie:</label>
      <div>
      @foreach ($categories as $category)
          <input type="checkbox" class="obligate" name="categories[]" id="categories-{{ $category->id }}" value="{{ $category->id }}" >
          <label class="me-2" for="categories-{{ $category->id }}">{{ $category->name }}</label>
          @endforeach
        </div>
      <button type="submit" class="btn btn-primary mt-3">Crea</button>
    </form>  
</div>

<script>
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

  
<style>
.required-indicator {
  color: red;
  font-weight: bold;
  margin-right: 5px;
}
.invisible{
  display: none
}
</style>