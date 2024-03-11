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
                                Prezzo: {{ $foodItem->cottura }}
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

                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection