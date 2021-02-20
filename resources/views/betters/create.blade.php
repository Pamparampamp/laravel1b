

@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">

            <h2>Add betters</h2>
        </div>
          <div class="pull-right">

            <a class="btn btn-primary"href="{{ route('betters.index') }}">Back</a>
        </div>

    </div>



</div>
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <Strong>whoops</Strong>
        <ul>
            @foreach($errors => all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

    <form action="{{ route('betters.store') }}" method="POST">
    @csrf
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Name </strong>
                    <input type="text" class="form-control" name="name" placeholder="name">
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Surname </strong>
                    <input type="text" class="form-control" name="surname" placeholder="runs">
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bet </strong>
                    <input type="text" class="form-control" name="bet" placeholder="wins">
                </div>
            </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Horse_id </strong>
                    <input type="text" class="form-control" name="horse_id" placeholder="about">
                </div>
            </div>

            {{-- <label>Keliaus į: </label>
            <select name="horses_id" id="" class="form-control">
            <option value="" selected disabled>Pasirinkite šalį</option>
            @foreach ($horses as $horse)
            <option value="{{ $horse->id }}">{{ $horse->name }}</option>
            @endforeach
            </select> --}}




             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>



        </div>






    </form>





@endsection
