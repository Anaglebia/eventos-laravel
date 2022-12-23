@extends('layouts.main')

@section('title', 'Criar evento')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="image">Imagem do Evento:</label>
        <input type="file" id="image" name="image" class="form-control-file">
    </div>
    <div class="form-group">
        <label for="title">Evento:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
    </div>
    <div class="form-group">
        <label for="title">Cidade:</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Local do Cidade">
    </div>
    <div class="form-group">
        <label for="title">O evento e privado?:</label>
        <select name="private" id="private" class="form-control">
            <option value="0">Sim</option>
            <option value="1">Não</option>
        </select>
    </div>

    <div class="form-group">
        <label for="title">Descrição do Evento:</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar evento">
    </form>
</div>


@endsection
