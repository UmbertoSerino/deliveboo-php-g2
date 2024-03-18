@extends('layouts.admin')

@section('head-title')
    @yield('page-title')
@endsection

@section('main-content')
<div class="container">
  {{-- Form --}}
  <form method="POST" action="@yield('form-action')" enctype="multipart/form-data" >
    @csrf
    @yield('form-method')
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Nome Ristorante:
            <div class="container-span">
              <span class="required-indicator">*</span>
            </div>  
          </label>
          <input type="text" class="form-control obligate inline @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name',$restaurant->name) }}" >
          @error('name')
            <span class="text-danger">{{ $message }}</span>
          @enderror 
        </div>
        <div class="form-group col-md-6">
          <label for="piva">Partita Iva: 
            <div class="container-span">
              <span class="required-indicator">*</span>
            </div>
          </label>
          <input type="text" class="form-control obligate @error('vat') is-invalid @enderror" id="vat" name="vat" value="{{ old('vat',$restaurant->vat) }}" >
        @error('vat')
          <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>
      </div>
      <div class="form-group col-md-6">
        <label for="address">Indirizzo:
          <div class="container-span">
            <span class="required-indicator">*</span>
          </div>
        </label>
        <input type="text" class="form-control obligate @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address',$restaurant->address) }}" >
        @error('address')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="phone_number">Numero di telefono:
          <div class="container-span">
            <span class="required-indicator">*</span>
          </div>
        </label>
        <input type="tel" class="form-control obligate @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ old('phone_number',$restaurant->phone_number) }}" >
        @error('phone_number')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Email:
            <div class="container-span">
              <span class="required-indicator">*</span>
            </div> 
          </label>
          <input type="email" class="form-control obligate @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email',$restaurant->email) }}" >
          @error('email')
            <span class="text-danger">{{ $message }}</span>
          @enderror 
        </div>
        <!-- <div class="form-group col-md-6">
              <label for="image_url">Logo: </label>
              <input type="image_url" class="form-control obligate" id="image_url" name="image_url" value="{{ old('image_url',$restaurant->image_url) }}" >
              <span class="required-indicator">* campi obbligatori</span>
            </div> -->
        <div class="mb-3 input-group">
          <div class="form-group">
            <label for="image">Inserire un'immagine del ristorante:
              <div class="container-span">
                <span class="required-indicator">*</span>
              </div> 
            </label>
            <input type="file" class="form-control obligate @error('image_url') is-invalid @enderror" id="image_url" name="image_url" value="{{ old('image_url', $restaurant->image_url)}}">
            @error('image_url')
              <span class="text-danger">{{ $message }}</span>
            @enderror 
          </div>
        </div>

        <label for="categories" class="mb-2">Categorie:</label>
        <div>
        @foreach ($categories as $category)
        <input type="checkbox" class="obligate" name="categories[]" id="categories-{{ $category->id }}" value="{{ $category->id }}" {{ in_array($category->id, old('categories', $restaurant->categories->pluck('id')->toArray())) ? 'checked' : '' }}  >
            <label class="me-2" for="categories-{{ $category->id }}">{{ $category->name }}
            </label>
            @endforeach
            @error('categories')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
      <button type="submit" class="btn btn-primary mt-3">Crea</button>
    </form>  
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const inputFields = document.querySelectorAll('.obligate');
    const spanElements = document.querySelectorAll('.required-indicator');

    // Funzione per controllare se un campo di input è vuoto
    function checkInputEmpty(inputField, spanElement) {
        if (inputField.value.trim() !== '') {
            spanElement.classList.add('invisible');
        } else {
            spanElement.classList.remove('invisible');
        }
    }

    // Controlla lo stato iniziale dei campi di input
    inputFields.forEach((inputField, index) => {
        checkInputEmpty(inputField, spanElements[index]);

        // Aggiungi un listener di input per i campi di input
        inputField.addEventListener('input', () => {
            checkInputEmpty(inputField, spanElements[index]);
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