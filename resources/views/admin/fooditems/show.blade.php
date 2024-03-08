@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7 text-center text-uppercase">
            <h2>
                {{ $fooditem->name }}
            </h2>
        </div>


        @include('partials.session-message')

        <div class="col-7 text-center">
            <h4 scope="row  justify-content-center">
                {{ $fooditem->id }} -- Category: {{ $fooditem->category->name }}
            </h4>

            <p>
                {{ $restaurant->user->name }}
            </p>
            <div class="p-5 text-start">
                <p>
                    <em>
                        {{ $fooditem->description}}
                    </em>
                </p>
            </div>
            <a href="{{ route('admin.fooditems.edit', $fooditems) }}" class="text-decoration-none">
                <button class="btn btn-sm btn-success">
                    Modifica Piatto
                </button>
            </a>
        
    </div>
</div>
@endsection