@extends('common.app')

@section('title', 'Listado de usuarios')

@section('sidebar')
    @parent

    <p>Cantidad de usuarios: {{sizeof($users)}}.</p>
@endsection

@section('content')
<h1>Listado de usuarios</h1>
<br>
@if($users)

<table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Sexo</th>
        <th>Email</th>
        <th>Nivel educacional</th>
      </tr>
    </thead>
    <tbody>
    <div class="container">
     @foreach($users as $user)
      <tr>
        <td> {{ $user->name }} </td>
        <td> {{ $user->surname }} </td>
        <td> {{ $user->sex }} </td>
        <td> {{ $user->email}} </td>
        <td>{{$user->educational_level->level}}</td>
      </tr>
      @endforeach
      <div class="container">
      {{ $users->links() }}
    </tbody>
  </table>
@endif
@endsection
