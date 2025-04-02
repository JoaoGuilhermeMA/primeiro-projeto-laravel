@extends('layout')

@section('titulo-pagina')
Listar diarias
@endsection

@section('conteudo-principal')
<h1>Lista de diarias</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">nome-cliente</th>
            <th scope="col">nome-diarista</th>
            <th scope="col">atendimneto</th>
            <th scope="col">valor</th>
            <th scope="col">ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($diarias as $diaria)
        <tr>
            <th scope="row">{{ $diaria->id }}</th>
            <td>{{ $diaria->nome_cliente }}</td>
            <td>{{ $diaria->nome_diarista }}</td>
            <td>{{ (new \DateTime($diaria->atendimento))->format('d/m/Y H:i') }}</td>
            <td>R${{ number_format($diaria->valor, 2,',','.') }}</td>
            <td><a href="{{route('diarias.show',$diaria)}}" class="btn btn-success">Detalhes</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection