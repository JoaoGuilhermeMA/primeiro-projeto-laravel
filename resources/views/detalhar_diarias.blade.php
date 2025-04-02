@extends('layout')

@section('titulo-pagina')
Detalhar diarias
@endsection

@section('conteudo-principal')
<h1>Detalhes da diaria {{ $diaria->id }}</h1>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Detalhes</h5>
        <p class="card-text">
            <strong>nome cliente: </strong> {{ $diaria->nome_cliente }}
        </p>
        <p>
            <strong>nome diarista: </strong> {{ $diaria->nome_diarista }}
        </p>
        <p>
            <strong>atendimento: </strong> {{ (new \DateTime($diaria->atendimento))->format('d/m/Y H:i') }}
        </p>
        <p>
            <strong>valor: </strong>R${{number_format($diaria->valor, 2,',','.') }}
        </p>
        <a href="{{ route('index') }}" class="btn btn-primary">voltar para lista</a>
    </div>
</div>
@endsection