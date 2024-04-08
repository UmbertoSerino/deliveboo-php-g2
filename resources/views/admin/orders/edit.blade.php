@extends('admin.orders.layouts.create-or-edit')

@section('page-title', 'Modifica')

@section('form-action')
    {{ route('admin.orders.update', $order) }}
@endsection

@section('form-method')
    @method('PUT')
@endsection
