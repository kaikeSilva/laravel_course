<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('css/principal.css')}}">
</head>
<body>
    <div class="row">
        <div class="col1">
            <div class="menu">
                <ul>
                    <li>
                        <a class="{{request()->routeIs('clientes.*') ? 'active': ''}}" 
                            href="{{route('clientes.index')}}">clientes</a>
                    </li>

                    <li><a class="{{request()->routeIs('produtos') ? 'active': ''}}" href="{{route('produtos')}}">produtos</a></li>
                    <li><a class="{{request()->routeIs('departamentos') ? 'active': ''}}" href="{{route('departamentos')}}">departamentos</a></li>

                    <li>
                        <a class="{{request()->routeIs('opcoes') ? 'active': ''}}" 
                            href="{{route('opcoes')}}">opções</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col1">
        @yield('conteudo')
    </div>
</body>
</html>
