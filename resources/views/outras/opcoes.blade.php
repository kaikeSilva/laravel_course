@extends('layouts.principal')
@section('titulo', 'opções')

@section('conteudo')
<div class="options">
    <ul>
        <li><a class="warning" href="{{route('opcoes',1)}}">warning</a></li>
        <li><a class="info" href="{{route('opcoes',2)}}">info</a></li>
        <li><a class="success" href="{{route('opcoes',3)}}">success</a></li>
        <li><a class="error" href="{{route('opcoes',4)}}">error</a></li>
    </ul>
</div>    

@if($opcao)
    @switch($opcao)
        @case(1)
            <x-alerta titulo='erro fatal' tipo='warning'>
                <p><strong>warning</strong></p>
                <p>Ocorreu um erro inesperado</p>
            </x-alerta>
            @break
        @case(2)
            <x-alerta titulo='erro fatal' tipo='info'>
                <p><strong>info</strong></p>
                <p>Ocorreu um erro inesperado</p>
            </x-alerta>
            @break
        @case(4)
            <x-alerta titulo='erro fatal' tipo='error'>
                <p><strong>error</strong></p>
                <p>Ocorreu um erro inesperado</p>
            </x-alerta>
        @break
        @case(3)
            <x-alerta titulo='erro fatal' tipo='success'>
                <p><strong>success</strong></p>
                <p>Ocorreu um erro inesperado</p>
            </x-alerta>
        @break
        @default
            
    @endswitch
@else
    
@endif
@endsection
