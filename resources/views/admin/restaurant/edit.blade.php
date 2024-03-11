@extends('layouts.admin')

@section('main-content')
<div class="container">
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
              <input type="text" class="form-control" id="piva" minlength="9" maxlength="10" name="vat" value="{{ old('name', $restaurant->vat) }}">
            </div>
          </div>
          <div class="form-group">
            <label for="address">Indirizzo</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('name', $restaurant->address) }}">
          </div>
          <div class="form-group">
            <label for="phone_number">Numero di telefono: </label>
            <input type="tel" class="form-control" id="phone_number" placeholder="3xx xxxxxxx" minlength="9" maxlength="10" name="phone_number" value="{{ old('name', $restaurant->phone_number) }}">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Email: </label>
              <input type="email" class="form-control" id="email" name="email" value="{{ old('name', $restaurant->email) }}">
            </div>
            <div class="form-group col-md-6">
              <label for="image_url">Logo: </label>
              <input type="image_url" class="form-control" id="image_url" name="image_url" value="{{ old('name', $restaurant->image_url) }}">
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

          {{-- da cancellare --}}
        {{-- <div class="mb-3">
          <label for="project_name" class="form-label">Nome Progetto</label>
          <input type="text" class="form-control" id="project_name" name="project_name" value="{{ old('project_name', $project->project_name) }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione progetto</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ old('project_name', $project->description) }}">
        </div>
        <div class="mb-3">
            <label for="language_used-name" class="form-label">Linguaggi utilizzati</label>
            <input type="text" class="form-control" id="language_used"  name="language_used" value="{{ old('project_name', $project->language_used) }}">
        </div>
        <div class="mb-3">
            <label for="framework_used" class="form-label">Frameword utilizzati</label>
            <input type="text" class="form-control" id="framework_used" name="framework_used" value="{{ old('project_name', $project->framework_used) }}">
        </div>
        <div class="mb-3">
            <label for="status" class="form-check-label">Status</label>
            <input type="checkbox" name="status" id="status" class="form-check-inline" @checked(old( 'status', $project->status ))>
        </div>
        <div class="mb-3">
            <label for="repository_url" class="form-label">Url Repository</label>
            <input type="text" class="form-control" id="repository_url" name="repository_url" value="{{ old('project_name', $project->repository_url) }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Invia</button> --}}
      </form>
</div>
@endsection