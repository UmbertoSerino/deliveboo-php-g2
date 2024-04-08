@extends('layouts.admin')

@section('main-content')
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-md-8 col-sm-10 p-3">
                <div class="card food-card mb-3 my_card d-flex flex-column @if ($foodItem->available == 0) no_available @endif" id="my_wrapper">
                    <h1 class="text-center mb-4">
                        {{ $foodItem->name }}
                    </h1>
                    <div class="row g-0 d-flex justify-content-center">
                        <div class="col-md-6">
                            @if (str_starts_with($foodItem->image_url, 'http'))
                            <img class="img-fluid rounded-start" src="{{ $foodItem->image_url }}" alt="{{ $foodItem->name }} Image">
                            @else
                            <img class="img-fluid rounded-start" alt="{{ $foodItem->name }} Image"
                            src="{{ asset('storage') . '/' . $foodItem->image_url }}">
                        </div>
                        @endif
                        <p class="fs-5">
                            <strong> Ingredienti: </strong> {{ $foodItem->ingredients }}
                        </p>
                        <p class="fs-5">
                            <strong> Prezzo: </strong>{{ $foodItem->price }} €
                        </p>
                        <p class="fs-5">
                            <strong>Descrizione: </strong> {{ $foodItem->description }}
                        </p>
                        <p class="fs-5">
                            <strong>Disponibile: </strong>
                            @if ($foodItem->available == 1)
                                <i class="fa-solid fa-circle-check"></i>
                            @else
                                <i class="fa-solid fa-circle-xmark"></i>
                            @endif
                        </p>
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="card-body">
                    </div>
                    <div class="col-12 justify-content-center d-flex">
                        <a class="btn btn-danger my_button" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $foodItem->id }}">Elimina</a>
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
                        <div class="ms-3">
                            <a href="{{ route('admin.fooditems.index', $foodItem) }}" class="btn btn-success my_button">Elenco Piatti</a>
                        </div>
                        <div class="ms-3">
                            <a href="{{ route('admin.fooditems.edit', $foodItem) }}" class="btn btn-warning my_button">Modifica piatto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    body{
      background-image: url('https://bistro1843.com/wp-content/uploads/2020/02/new-hero-banner-2.jpg');
      background-repeat: no-repeat; /* Impedisce la ripetizione dello sfondo */
      background-size: cover; /* Ridimensiona l'immagine per coprire l'intera area */
      background-position: center; /* Centra l'immagine */
    }
    #my_wrapper {
    min-width: 250px;
    border: 5px solid rgb(206, 206, 206);
    background-color: rgb(228, 228, 228);
    border-radius: 10px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); 
    /* transition: all 0.3s ease;  */
    }

    #my_wrapper:hover {
    /* transform: scale(1.05);  */
    box-shadow: 40px 40px 80px rgba(0, 0, 0, 0.3);   
    }

    @media screen and (max-width: 880px) {
    .cater3-movingBG {
        background-size: 250%;
        background-position: center;
    }
}
    @media screen and (max-width: 550px) {
        #my_wrapper {
        min-width: 250px;
        border: 5px solid rgb(206, 206, 206);
        background-color: rgb(228, 228, 228);
        border-radius: 10px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); 

        a{
            display:flex;
            justify-content: center;
            align-items: center;
        }
    }
}
  </style>