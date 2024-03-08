@extends('layouts.admin')
@section('main-content')

<div class="container">
    <div class="row">
      <h1 class="mb-5 text-center">
        Qui sono disponibili tutti i ristoranti    
      </h1>
      @if ($restaurants->isEmpty())
      <div class="col-6">
          <a href="{{ route('admin.restaurants.create') }}" class="btn btn-primary">Crea un nuovo Ristorante</a>
      </div>
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
                <td> 
                  <div class="col-6">
                      <a href="{{ route('admin.fooditems.create', $restaurant) }}" class="btn btn-primary">Aggiungi piatto</a>
                  </div>
                </td>
                @empty
                <td> Nessun Ristorante creato {{ Auth::user()->name }} </td>
                @endforelse 
              </tr>
            </tbody>
          </table>       
        </div>
      </div>
    </div>
  </div>

@endsection