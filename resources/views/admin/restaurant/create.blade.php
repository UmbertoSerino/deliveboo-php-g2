@extends('admin.restaurant.layouts.create-or-edit')

@section('page-title', 'Crea un Ristorante')

@section('form-action')
    {{ route('admin.restaurants.store') }}
@endsection

@section('form-method')
    @method('POST')
@endsection