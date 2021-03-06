@extends('layouts.app')
@section('content')

<a class="btn btn-primary" href="{{ route('betters.create') }}"> Create new Better</a>

<div class="card-body">
<form class="form-inline" action="{{ route('betters.index') }}" method="GET">
<select name="horse_id" id="" class="form-control">
<option value="" selected disabled>Pasirinkite šalį klientų filtravimui:</option>
@foreach ($betters as $better)
<option value="{{ $better->id }}"
@if($better->id == app('request')->input('horse_id'))
selected="selected"
@endif>{{ $better->name }}</option>
@endforeach
</select>
<button type="submit" class="btn btn-primary">Submit</button>
<a class="btn btn-success" href={{ route('betters.index') }}>Rodyti visus</a>
</form>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Bets</th>
      <th scope="col">Horse_id</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach($betters as $better)


    <tr>
      <th scope="row">{{ $better->name }}</th>
      <td scope="row">{{ $better->surname }}</td>
      <td scope="row">{{ $better->bet }}</td>
      <td scope="row">{{ $better->horse_id}}</td>
       <td>
            <form action="{{ route('betters.destroy', $better->id) }}" method="post">

<a class="btn btn-success" href="{{ route('betters.edit',$better->id) }}">Redaguoti</a>

@method('DELETE')
@csrf
<button name="destroy"  class="btn btn-danger">Delete</button>
<a href="{{ route('better.travel', $better->id) }}" class="btn btn-primary m-1">Peržiūrėti </a>
            </form>






       </td>
    </tr>
   @endforeach
  </tbody>
</table>


@endsection

