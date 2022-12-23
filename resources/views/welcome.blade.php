@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

 <div class="col-md-12" id="search-container">
    <h1>Busque Eventos</h1>
    <form action="">
        <input type="text" name="search" id="search" class="form-control" placeholder="Procurar">
    </form>
 </div>

 <div class="col-md-12" id="events-container">
    <h2>Proximos eventos</h2>
    <p class="subtitle">Veja os eventos dos proximos dias</p>
    <div id="cards-container" class="row">
    @foreach($events as $event)
    <div class="card col-md-3">
        <img src="\img\events\{{$event->image}}" alt="{{$event->title}}">
        <div class="card-body">
            <p class="card-date">10/12/2022</p>
            <h5 class="card-title">{{$event->title}}</h5>
            <p class="card-participantes">X Participantes</p>
            <a href="#" class="btn btn-primary">Saber mais</a>
        </div>
    </div>
    @endforeach
    </div>
 </div>

@endsection
