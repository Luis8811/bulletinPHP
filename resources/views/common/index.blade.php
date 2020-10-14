
@extends('common.app')

@section('title', 'Inicio')

@section('sidebar')
    @parent
    <h1>Desarrollo del caso práctico <span class="label label-default">curso de PHP de Andalucía es Digital</span></h1>
@endsection

@section('content')
    <p class="bg-info">Aspectos considerados en el desarrollo del caso práctico</p>
    <ul class="list-group">
        <li class="list-group-item">PHP con un framework: <span class="badge">Se usa Laravel debido a que facilita el trabajo y tiene demanda</span></li>
        <li class="list-group-item">Front end atractivo: <span class="badge">Uso de Bootstrap 4</span></li>
        <li class="list-group-item">Autoaprendizaje</li>
      </ul>
@endsection
