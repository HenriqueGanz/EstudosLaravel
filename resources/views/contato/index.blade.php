@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')
    <h3> Essa e a view Index </h3>
    @foreach($contatos as $contato)
        <h1>{{ $contato->nome }}</h1>
        <h2>{{ $contato->tel }}</h2>
    @endforeach
@endsection

