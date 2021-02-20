@extends('layouts.app')
@section('content')

<a class="btn btn-primary" href="{{ route('horses.create') }}"> Create new Horse</a>

<table class="table">
  <thead>
    <tr>
         <th scope="col">Horse_id</th>
      <th scope="col">Name</th>
      <th scope="col">Runs</th>
      <th scope="col">Wins</th>
      <th scope="col">About</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach($horses as $horse)


    <tr>
         <th scope="row">{{ $horse->id }}</th>
      <th scope="row">{{ $horse->name }}</th>
      <td scope="row">{{ $horse->runs }}</td>
      <td scope="row">{{ $horse->wins }}</td>
      <td scope="row">{!! $horse->about!!}</td>
       <td>
            <form action="{{ route('horses.destroy', $horse->id) }}" method="post">

<a class="btn btn-success" href="{{ route('horses.edit',$horse->id) }}">Redaguoti</a>

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
