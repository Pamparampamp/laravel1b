@extends('layouts.app')
@section('content')

<a class="btn btn-primary" href="{{ route('betters.create') }}"> Create new Horse</a>

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
            <form action="{{ route('better.destroy', $better->id) }}" method="post">

<a class="btn btn-success" href="{{ route('better.edit',$better->id) }}">Redaguoti</a>

@method('DELETE')
@csrf
<button name="destroy"  class="btn btn-danger">Delete</button>
            </form>






       </td>
    </tr>
   @endforeach
  </tbody>
</table>


@endsection

