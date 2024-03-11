@extends('layouts.admin')

@section('main-content')
  <div class="container">
    @include('partials.errors')
      <form action="{{ route('admin.restaurants.update', $restaurant) }}" method="post">
          @csrf
          @method('PUT')
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Nome Ristorante: </label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $restaurant->name) }}">
              </div>
              <div class="form-group col-md-6">
                <label for="piva">Partita Iva: </label>
                <input type="text" class="form-control" id="piva" minlength="9" maxlength="10" name="vat" value="{{ old('piva', $restaurant->vat) }}">
              </div>
            </div>
            <div class="form-group">
              <label for="address">Indirizzo</label>
              <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $restaurant->address) }}">
            </div>
            <div class="form-group">
              <label for="phone_number">Numero di telefono: </label>
              <input type="tel" class="form-control" id="phone_number" placeholder="3xx xxxxxxx" minlength="9" maxlength="10" name="phone_number" value="{{ old('phone_number', $restaurant->phone_number) }}">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Email: </label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $restaurant->email) }}">
              </div>
              <div class="form-group col-md-6">
                <label for="image_url">Logo: </label>
                <input type="image_url" class="form-control" id="image_url" name="image_url" value="{{ old('image_url', $restaurant->image_url) }}">
              </div>
              <div class="mb-3 input-group">
                <img src="" alt="Image preview" class="d-none img-fluid" id="image-preview">
            </div>
            </div>
            <label for="categories" class="mb-2">Categorie:</label>
            <div>
            @foreach ($categories as $category)
                <input type="checkbox" name="categories[]" id="categories-{{ $category->id }}" value="{{ $category->id }}" {{ in_array($category->id, old('categories', $restaurant->categories->pluck('id')->toArray())) ? 'checked' : '' }}  >
                {{-- {{ in_array($category->id, old('categories', $restaurant->categories->pluck('id')->toArray())) ? 'checked' : '' }} --}}
                <label class="me-2" for="categories-{{ $category->id }}">{{ $category->name }}</label>
                @endforeach
              </div>
            <button type="submit" class="btn btn-primary mt-3">Modifica</button>
        </form>
  </div>
  {{--  Script that show preview image url --}}
  <script>
    document.getElementById('image_url').addEventListener('change', function(event){
        const imageElement = document.getElementById('image-preview');
        imageElement.setAttribute('src' , this.value);
        imageElement.classList.remove('d-none');
    });
</script>
@endsection