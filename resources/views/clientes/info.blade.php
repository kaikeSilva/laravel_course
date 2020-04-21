@extends('layouts.principal')
@section('titulo', 'Clientes detalhes')
@section('conteudo')
    <h3>Informações</h3>

    <p>Nome: {{$cliente['nome']}}</p>

    <p>id: {{$cliente['id']}}</p>

    <a href="{{route('clientes.index')}}">voltar</a>
@endsection