@extends('layouts.app')
@section('content')
<div class="card">
<div class="card-header">Lažybų detalės</div>
<div class="card-body">
<h5>Užsakovas: {{ $better->name }} {{$better->surname}}</h5>
<h5>Surname: {{ $better->surname }}</h5>
<h5>BET: {{ $better->bet }}</h5>
<hr>
<h5>Better name: {{ $better->name }}</h5>
<h5>Pasirinkto žirgo vardas: {{ $better->horse->name }}</h5>
<h5>Pasirinkto žirgo bėgimai: {{ $better->horse->runs }}</h5>
<h5>Pasirinkto žirgo pergalės: {{ $better->horse->wins }}</h5>
<h5>Apie žirgą: {!! $better->horse->about !!}</h5>
</div>
</div>
@endsection
