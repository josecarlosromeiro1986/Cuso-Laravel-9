@extends('layouts.app')
@section('title', 'Editar o Usuário')
@section('content')
    <h1>Editar o usuário {{ $user->name }}</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        @include('users._partials.form')
    </form>
@endsection
