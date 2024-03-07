@extends('layouts.admin')
@section('main-content')

<div class="container">
    <div class="row">
      <h1 class="mb-5 text-center">
        Qui sono disponibili tutti i ristoranti    
      </h1>
      @if ($restaurant->isEmpty())
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
                @forelse ($restaurant as $restaurants )
              <tr>
                <th scope="row">{{ $restaurants->id }}</th>
                <td>{{ $restaurants->name }}</td>
                <td> {{$restaurants->vat}}</td>
                <td>{{ $restaurants->email }}</td>
                <td>{{ $restaurants->address }}</td>
                <td>{{ $restaurants->phone_number }} </td>
                <td>- </td>

                <td>{{ $restaurants->user->name }} {{ $restaurants->user->last_name }}</td>
                <td>{{ $restaurants->user->email }}</td>
                <td>{{ $restaurants->created_at->format('d/m/Y') }}</td>
                @empty
                <td> Non ci sono ristoranti {{ Auth::user()->name }} </td>
                @endforelse 
              </tr>
            </tbody>
          </table>
        <div class="col-12">
        </div>
      </div>
    </div>
  </div>

@endsection