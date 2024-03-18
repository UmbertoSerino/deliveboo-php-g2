@extends('admin.orders.layouts.create-or-edit')

@section('page-title', 'Create new post')

@section('form-action')
    {{ route('admin.orders.store' ) }}
@endsection

@section('form-method')
    @method('POST')
@endsection
