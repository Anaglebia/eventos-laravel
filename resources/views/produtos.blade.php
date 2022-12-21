@extends('layouts.main')

@section('title', 'produtos')

@section('content')

<h1>Pagina de produtos</h1>

@if($busca !='')
<p>O usuario esta buscando por: {{$busca}}</p>
@endif
<a href="/">Voltar para a Home</a>
<a href="contact">Voltar para Contact</a>

@endsection
