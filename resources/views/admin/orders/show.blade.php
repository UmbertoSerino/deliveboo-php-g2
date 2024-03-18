@extends('layouts.admin')

@section('page-title', 'Admin Dashboard')

@section('main-content')
<section class="products">
    <div class="container">
        <div class="row">
            <div class="row mb-3 justify-content-center">
                <div class="col-7 p-3">
                    <div class="card p-4 text-center">
                        <h1>
                           Cliente: {{ $order->customer }}
                        </h1>
                        <p class="text-capitalize">
                            Indirizzo: {{ $order->user_address }}
                        </p>
                        <p>
                            Ordinato il: {{ $order->created_at }}
                        </p>
                        <p class="text-capitalize">
                            Stato: {{ $order->status}}
                        </p>
                        <p class="text-capitalize">
                            Totale: {{ $order->total }} &euro;
                        </p>
                        <p>
                            Email Cliente: {{ $order->user_mail }}
                        </p>
                        <p>
                            Numero di Telefono: {{ $order->user_phone_number }} 
                        </p>
                        <div class="actions mb-3 pt-3">
                            <a href="{{ route('admin.orders.edit', $order->id) }}">
                                <button class="btn btn-primary">
                                    Modifica  Ordine
                                </button>
                            </a>
                        </div>

                        {{-- Delete --}}
                        <form class="d-inline-block" action="{{ route('admin.orders.destroy', $order) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-sm btn-warning" type="submit">
                                Delete
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection