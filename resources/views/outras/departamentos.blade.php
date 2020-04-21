@extends('layouts.principal')
@section('titulo', 'Departamentos')
@section('conteudo')
    <h3>Departamentos</h3>

    <x-alerta titulo='erro fatal' tipo='info'>
        <p><strong>Erro inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
    </x-alerta>

    <x-alerta titulo='erro fatal' tipo='error'>
        <p><strong>Erro inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
    </x-alerta>
    
    <x-alerta titulo='erro fatal' tipo='success'>
        <p><strong>Erro inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
    </x-alerta>

    <x-alerta titulo='erro fatal' tipo='warning'>
        <p><strong>Erro inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
    </x-alerta>
    
@endsection