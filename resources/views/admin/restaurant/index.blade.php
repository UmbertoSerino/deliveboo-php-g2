@extends('layouts.admin')
@section('main-content')

<div class="container">
    <div class="row">
      @if ($restaurants->isEmpty())
      <div class="col-12 text-center">
          <a href="{{ route('admin.restaurants.create') }}" class="btn btn-primary">Inizializza Ristorante</a>
      </div>
<<<<<<< HEAD
      @else
      {{-- inizio card --}}
      @foreach ($restaurants as $restaurant)
        
      <div class="col-12">
      <div class="card mb-3" style="">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ $restaurant->image_url }}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body d-flex justify-content-between">
              <div>

                <h5 class="card-title">Ristorante "{{ $restaurant->name }}"" di {{ $restaurant->user->name }} {{ $restaurant->user->last_name }} </h5>
  
                <p class="card-text">Recapito ristorante: {{ $restaurant->email }}, {{ $restaurant->phone_number }}</p>
                <p class="card-text">Indirizzo: {{ $restaurant->address }}</p>
                <p class="card-text">Partita Iva: {{ $restaurant->vat }}</p>
                <p class="card-text">Recapito titolare: {{ $restaurant->user->email }}</p>
              </div>
              <div>
                <a href="{{ route('admin.restaurants.edit', $restaurant->id) }}" class="btn btn-primary">Modifica</a>
                {{-- <form action="{{ route('admin.restaurant.edit') }}" method="PUT">
                  @csrf
                  @method('PUT')
                  <button class="btn btn-primary" type="submit">Modifica</button>
                </form> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="col-12">
      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Menù</h5>
              <p class="card-text">Aggiungi e aggiorna le tue pietanze</p>
              
              <form action="{{ route('admin.fooditems.index') }}" method="GET">
                @csrf
                <button class="btn btn-primary" type="submit">I miei piatti</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ordini</h5>
              <p class="card-text">Tieni sott'occhio le ordinazioni nel tuo ristorante</p>
              <a href="#" class="btn btn-primary">I miei ordini</a>
            </div>
          </div>
        </div>
      </div>
    </div>
      @endif
          
=======
      @endif
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Nome Ristorante</th>
                <th scope="col">Partita Iva</th>
                <th scope="col">Mail del ristorante</th>
                <th scope="col">indirizzo</th>
                <th scope='col'>numero telefonico</th>
                <th scope='col'>immagine</th>
                <th scope="col">Titolare</th>
                <th scope="col">Mail del Titolare</th>
                <th scope="col">Ristorante creato il</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($restaurants as $restaurant )
              <tr>
                <td>{{ $restaurant->name }}</td>
                <td> {{$restaurant->vat}}</td>
                <td>{{ $restaurant->email }}</td>
                <td>{{ $restaurant->address }}</td>
                <td>{{ $restaurant->phone_number }} </td>
                <td>- </td>

                <td>{{ $restaurant->user->name }} {{ $restaurant->user->last_name }}</td>
                <td>{{ $restaurant->user->email }}</td>
                <td>{{ $restaurant->created_at->format('d/m/Y') }}</td>
                <td class="d-flex"> 
                  <div class="col-6">
                      <a href="{{ route('admin.fooditems.create', $restaurant) }}" class="btn btn-primary">Aggiungi piatto</a>
                  </div>
                  <div class="col-6">
                      <a href="{{ route('admin.fooditems.index', $restaurant) }}" class="btn btn-warning">Elenco Piatti</a>
                  </div>
                </td>
                @empty
                <td> Nessun Ristorante creato {{ Auth::user()->name }} </td>
                @endforelse 
              </tr>
            </tbody>
          </table>       
>>>>>>> crud-fooditem-4
        </div>
      </div>
    </div>
  </div>

@endsection