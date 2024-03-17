@extends('layouts.admin')

@section('main-content')
  <div class="container">
    <form action="{{ route('admin.restaurants.update', $restaurant) }}" method="post">
      @csrf
        @method('PUT')
{{-- Section Name --}}
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Nome Ristorante:
{{-- Indicator Obligate --}}
              <div class="container-span">
                <span class="required-indicator">*</span>
              </div>  
            </label>
{{-- Input Name --}}
            <input type="text" class="form-control obligate" id="name" name="name" value="{{ old('name', $restaurant->name) }}">
{{-- Name error --}}
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror 
          </div>
{{-- Section VAT --}}
          <div class="form-group col-md-6">
            <label for="piva">Partita Iva:
{{-- Indicator Obligate --}}
              <div class="container-span">
                <span class="required-indicator">*</span>
              </div>  
            </label>
{{-- Input VAT --}}
            <input type="text" class="form-control obligate" id="vat" maxlength="11" name="vat" value="{{ old('vat', $restaurant->vat) }}">
{{-- VAT error --}}
            @error('vat')
              <span class="text-danger">{{ $message }}</span>
            @enderror 
          </div>
        </div>
{{-- Section Address--}}
          <div class="form-group col-md-6">
            <label for="address">Indirizzo:
{{-- Indicator Obligate --}}
              <div class="container-span">
                <span class="required-indicator">*</span>
              </div>  
            </label>
{{-- Input Address --}}
            <input type="text" class="form-control obligate" id="address" name="address" value="{{ old('address', $restaurant->address) }}">
{{-- Address error --}}
            @error('address')
              <span class="text-danger">{{ $message }}</span>
            @enderror 
          </div>
{{-- Section Phone Number--}}
          <div class="form-group col-md-6">
            <label for="phone_number">Numero di telefono:
{{-- Indicator Obligate --}}
              <div class="container-span">
                <span class="required-indicator">*</span>
              </div>  
            </label>
{{-- Input Phone Number --}}
            <input type="tel" class="form-control obligate" id="phone_number" name="phone_number" value="{{ old('phone_number', $restaurant->phone_number) }}">
{{-- Error Phone Number --}}
            @error('phone_number')
              <span class="text-danger">{{ $message }}</span>
            @enderror 
            </div>
{{-- Section Email --}}
            <div class="form-row">
              <div class="form-group col-md-6  mb-4">
                <label for="inputCity">Email: </label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $restaurant->email) }}">
              </div>
              <div class="form-group col-md-6 mb-2">
                <div class="input-group">
                  <!-- <label for="image_url" class="input-group-text">Inserire un'immagine del ristorante in formato .jpg o .png</label>
                  <input class="form-control obligate" type="file" name="image_url" id="image_url" value="{{ old('image_url', $restaurant->image_url)}}"> -->
                    <div class="form-group">
                        <label for="image_url">Inserire un'immagine del ristorante</label>
                        <input type="file" class="form-control obligate" id="image_url" name="image_url" value="{{ old('image_url', $restaurant->image_url)}}">
                        <span class="required-indicator">* campi obbligatori</span>
                    </div>
                </div>
              </div>
              <div class="mb-3 input-group">
                <img src="" alt="Image preview" class="d-none img-fluid" id="image-preview">
            </div>
            </div>
{{-- Section Categories --}}
            <label for="categories" class="mb-2">Categorie:
{{-- Indicator Obligate --}}
              <div class="container-span">
                <span class="required-indicator">*</span>
              </div>  
            </label>
            <div>
            @foreach ($categories as $category)
                <input type="checkbox" class="obligate" name="categories[]" id="categories-{{ $category->id }}" value="{{ $category->id }}" {{ in_array($category->id, old('categories', $restaurant->categories->pluck('id')->toArray())) ? 'checked' : '' }}  >
                {{-- {{ in_array($category->id, old('categories', $restaurant->categories->pluck('id')->toArray())) ? 'checked' : '' }} --}}
                <label class="me-2" for="categories-{{ $category->id }}">{{ $category->name }}</label>
                @endforeach
{{-- Error Categories --}}
                @error('categories')
                <span class="text-danger">{{ $message }}</span>
              @enderror 
              </div>
              <div>
                <a href="{{ route('admin.restaurants.edit', $restaurant->id) }}" class="btn btn-primary mb-3">
                  <button type="submit" class="btn btn-primary mt-3">Conferma Modifica</button>
                </a>
              </div>
      </form>
  </div>
{{--  Script that show preview image url --}}
<script>
document.getElementById('image_url').addEventListener('change', function(event){
  const imageElement = document.getElementById('image-preview');
  imageElement.setAttribute('src' , this.value);
  imageElement.classList.remove('d-none');
});

// --------------------   Script per evidenziare i campi obbligatori
// verifica che parte al caricamento del dom
document.addEventListener('DOMContentLoaded', function () {
  const inputFields = document.querySelectorAll('.obligate');
  const spanElements = document.querySelectorAll('.required-indicator');

// Nascondi gli asterischi solo se l'input è vuoto
  inputFields.forEach((inputField, index) => {
  if (inputField.value.trim() !== '') {
  spanElements[index].classList.add('invisible');
  }
});

// Aggiungi un listener di input per controllare quando l'utente immette dati
inputFields.forEach((inputField, index) => {
  inputField.addEventListener('input', () => {
  if (inputField.value.trim() !== '') {
  spanElements[index].classList.add('invisible');
  } else {
  spanElements[index].classList.remove('invisible');
      }
    });
  });
});
</script>
@endsection

<style>
  .required-indicator {
    color: red;
    font-weight: bold;
    margin-right: 5px;
    width: 10px;
  }
  .invisible{
    display: none
  }
  div.container-span{
      /* height: 20px; */
      width: 20px;
      display:inline-block;
  }
</style>