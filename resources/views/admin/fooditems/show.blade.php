@extends('layouts.admin')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row mb-3 justify-content-center">
                    <div class="col-7 p-3">
                        <div class="card p-4 text-center">
                            <h1>
                                {{ $foodItem->name }}
                            </h1>
                            <p>
                                Ingredienti: {{ $foodItem->ingredients }}
                            </p>
                            <p>
                                Prezzo: {{ $foodItem->price }}
                            </p>

                            <div class="card-image">
                                <img class="w-50" src="{{  $foodItem->image_url }}" alt="{{ $foodItem->name }} ">
                            </div>
                            <div class="card-body">
                                <h2>
                                    Descrizione:
                                </h2>
                                <p>
                                    {{ $foodItem->description }}
                                </p>
                            </div>
                            <div class="col-12 justify-content-center d-flex">
                                {{-- <form  action="{{ route('admin.fooditems.destroy', $foodItem) }}" method="POST" data-fooditem-name="{{ $foodItem['name'] }}">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger" >
                                        Elimina
                                    </button>
                                </form> --}}
                                <a class="btn btn-danger" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $foodItem->id }}">Elimina</a>
                                {{-- Delete modal --}}
                                <div class="modal fade" id="exampleModal-{{ $foodItem->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Sicuro di voler eliminare?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                                        <form action="{{ route('admin.fooditems.destroy', $foodItem) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Elimina</button>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                {{-- final modal --}}
                                <div class="ms-3">
                                    <a href="{{ route('admin.fooditems.index', $foodItem) }}" class="btn btn-success">Elenco Piatti</a>
                                </div>
                                <div class="ms-3">
                                    <a href="{{ route('admin.fooditems.edit', $foodItem) }}" class="btn btn-warning">Modifica piatto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection