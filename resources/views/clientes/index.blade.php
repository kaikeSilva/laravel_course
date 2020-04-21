@extends('layouts.principal')

@section('titulo', 'Clientes')

@section('conteudo')

<h3>{{$titulo}}</h3>
<a href="{{ route('clientes.create') }}">Novo</a>

@if(count($clientes)>0)
    <ul>
        @foreach($clientes as $cliente)
            <li>
                {{ $cliente['id'] }} | {{ $cliente['nome'] }}
                <a href="{{ route('clientes.edit',$cliente['id']) }}">Editar</a>
                <a href="{{route('clientes.show', $cliente['id'])}}">Info</a>
                <form action="{{ route('clientes.destroy',$cliente['id']) }}"  method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="deletar">
                </form>
                
            </li>
        @endforeach
    </ul>    


@empty($clientes)
    <h4>Não existem clientes cadastrados</h4>
@endempty

@endsection


@for($i = 0; $i < 10; $i++)
{{$i}}<br>
@endfor

@for($i = 0; $i < count($clientes); $i++)
{{$i}} = {{$clientes[$i]['nome']}} <br>
@endfor

@foreach($clientes as $c)
<p>
    {{$c['nome']}} |
    @if($loop->first)
        (primeiro) |
    @endif
    @if($loop->last)
        (ultimo) |
    @endif
</p>
@endforeach
@else
<h4>Não existem clientes cadastrados</h4>
@endif