@extends('layouts.main')

@section('title', 'produto')

@section('content')

@if($id != null)
    <p>Exibindo Produto id: {{$id}}</p>
@endif

@endsection
