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
                <th scope="col">ID</th>
                <th scope="col">Nome Ristoranti</th>
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
                <th scope="row">{{ $restaurant->id }}</th>
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
                      <a href="{{ route('admin.restaurants.show', $restaurant) }}" class="btn btn-primary">Visualizza Ristorante</a>
                  </div>
                </td>

                
                @empty
                <td> Non ci sono ristoranti {{ Auth::user()->name }} </td>
                @endforelse 
              </tr>
            </tbody>
          </table>
          <form action="{{ route('admin.restaurants.create') }}" method="GET">
                        @csrf
                      <button class="btn btn-success">Aggiungi ristorante</button>
          </form>        
        <div class="col-12">
        </div>
      </div>
    </div>
  </div>

@endsection