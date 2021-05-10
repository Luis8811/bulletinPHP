@extends('common.app')

@section('title', 'Registrar nuevo usuario')

@section('sidebar')
    @parent
@endsection

@section('content')
<h1>
<span class="label label-primary">Registrar nuevo suscriptor <i class="fas fa-user-plus"></i></span>
</h1>
<form method="post" action="sign_up_OK">
    @csrf
    <fieldset>
    <legend>Datos del nuevo usuario</legend>
    <label for="name">Nombre:</label>
    <input id="name" type="text" placeholder="Nombre" required name="name">
    <label for="surname">Apellidos:</label>
    <input id="surname" type="text" placeholder="Apellidos" required name="surname">
    <label for="email">Correo electrónico:</label>
    <input id="email" type="email" placeholder="Email" required name="email">
    <label for="password">Contraseña:</label>
    <input id="password" type="password" required name="password">
    <fieldset>
    <legend>Sexo</legend>
    <input type="radio" name="gender" value="M" id="male" checked="checked">
    <label for="male">Masculino</label>
    <input type="radio" name="gender" value="F" id="female">
    <label for="female">Femenino</label>
    </fieldset>
    <label for="educational_level">Nivel de estudios</label>
    <select name="educational_level" id="educational_level">
        <optgroup label="Básico">
            <option value="1">Primario</option>
            <option value="2">Secundario</option>
            <option value="3">FP</option>
          </optgroup>
          <optgroup label="Superior">
            <option value="4">Grado superior</option>
            <option value="5">Postgrado</option>
            <option value="6">Máster</option>
            <option value="7">Doctorado</option>
          </optgroup>
    </select>
    </fieldset>
    <br>
    <fieldset>
    <legend>Suscripción a boletines semanales</legend>
    <label for="music">Música</label>
    <input type="checkbox" name="music" id="music" value="1">
    <label for="sports">Deportes</label>
    <input type="checkbox" name="sports" id="sports" value="2">
    <label for="movies">Películas</label>
    <input type="checkbox" name="movies" id="movies" value="3">
    <label for="science">Ciencia</label>
    <input type="checkbox" name="science" id="science" value="4">
    <br>
    <label for="day">Día de la semana en que se desea recibir</label>
    <select name="day" id="day">
        <option value="1">Lunes</option>
        <option value="2">Martes</option>
        <option value="3">Miércoles</option>
        <option value="4">Jueves</option>
        <option value="5">Viernes</option>
        <option value="6">Sábado</option>
        <option value="7">Domingo</option>
    </select>
    </fieldset>
    <input type="submit" name="submit" value="Enviar">
    <input type="reset" value="Borrar">
</form>
@endsection
