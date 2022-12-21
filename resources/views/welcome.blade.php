@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <h1>Pagina Home</h1>
<img src="/img/img2.jpg" alt="" width="200px">
@if(10>5)
<p>A Conidção e true</p>
@endif
<p>{{$nome}}</p>
@if($nome == 'Julia')
<p>O nome e Julia</p>
@elseif($nome == 'Ana')
<p>O nome é {{$nome}} e ela tem {{$idade}} anos</p>
@else
<p>O nome não e julia</p>
@endif

<hr>

@for($i = 0; $i < count($arr); $i++)
<p>{{$arr[$i]}} - {{$i}}</p>
@endfor


@foreach($nomes as $nome)
<p>{{$loop->index}}</p>
<p>{{$nome}}</p>
@endforeach

    <a href="/contact">Voltar para a Contact</a>

@endsection
