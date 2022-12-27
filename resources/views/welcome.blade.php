@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

 <div class="col-md-12" id="search-container">
    <h1>Busque Eventos</h1>
    <form action="/" method="GET">
        <input type="text" name="search" id="search" class="form-control" placeholder="Procurar">
    </form>
 </div>

 <div class="col-md-12" id="events-container">
    @if($search)
    <h2>Buscando por :{{$search}}</h2>
    @else
    <h2>Proximos eventos</h2>
    @endif

    <p class="subtitle">Veja os eventos dos proximos dias</p>
    <div id="cards-container" class="row">
    @foreach($events as $event)
    <div class="card col-md-3">
        <img src="\img\events\{{$event->image}}" alt="{{$event->title}}">
        <div class="card-body">
            <p class="card-date">{{date('d/m/Y', strtotime($event->date))}}</p>
            <h5 class="card-title">{{$event->title}}</h5>
            <p class="card-participantes">X Participantes</p>
            <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais</a>
        </div>
    </div>
    @endforeach
    @if(count($events)== 0 && $search)
    <p>Não foi possivel encontrar eventos com {{$search}}! <a href="/">Ver todos os eventos!</a> </p>
    @elseif(count($events)== 0)
    <p>Não há eventos disponiveis</p>
    @endif
    </div>
 </div>

@endsection
