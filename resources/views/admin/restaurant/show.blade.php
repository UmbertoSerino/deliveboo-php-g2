@extends('layouts.app')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row mb-3 justify-content-center">
                    <div class="col-7 p-3">
                        @foreach ($restaurant->fooditem as $fooditems)
                           
                            
                            <div class="card p-4 text-center">
                                <h1>
                                    {{ $fooditems->name }}
                                </h1>
                                <p>
                                    {{ $fooditems->restaurant_id }}
                                </p>
                                <p>
                                    Ingredienti: {{ $fooditems->ingredients }}
                                </p>
                                <p>
                                    Prezzo: {{ $fooditems->price }}
                                </p>

                                <div class="card-image">
                                    <img class="w-50" src="{{  $fooditems->image_url }}" alt="{{ $fooditems->name }} ">
                                </div>
                                <div class="card-body">
                                    <h2>
                                        Descrizione
                                    </h2>
                                    <p>
                                        {{ $fooditems->description }}
                                    </p>
                                </div>

                                <div class="actions mb-3 pt-3">
                                    <a href="{{ route('admin.restaurants.edit', $restaurant->id) }}">
                                        <button class="btn btn-primary">
                                            Modifica questo ristorante
                                        </button>
                                    </a>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection