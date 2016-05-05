@extends('template')
@section('content')
    <h2 class="section-heading">{{ $titulo  }}</h2>
    <p class="text-muted">{!! $subtitulo !!}</p>
    <small class="caption text-muted">postado por: {{ $user }} criado as {{ $created_at }}</small>
    <hr>
    <small class="caption text-muted"><a href="/">Voltar</a></small>
@stop