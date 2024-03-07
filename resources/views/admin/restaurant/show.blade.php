@extends('layouts.app')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row mb-3 justify-content-center">
                    <div class="col-7 p-3">
                        <h1>
                            cioneee
                        </h1>
                        <!-- @foreach ($fooditems as $fooditem)
                            <div class="card p-4 text-center">
                                <h1>
                                    {{ $fooditem->name }}
                                </h1>
                                <p>
                                    {{ $fooditem->restaurant_id }}
                                </p>
                                <p>
                                    Ingredienti: {{ $fooditem->ingredients }}
                                </p>
                                <p>
                                    Prezzo: {{ $fooditem->price }}
                                </p>

                                <div class="card-image">
                                    <img class="w-50" src="{{  $fooditem->image_url }}" alt="{{ $fooditem->name }} ">
                                </div>
                                <div class="card-body">
                                    <h2>
                                        Descrizione
                                    </h2>
                                    <p>
                                        {{ $fooditem->description }}
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
                        @endforeach -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection