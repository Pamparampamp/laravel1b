

@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">

            <h2>Add horses</h2>
        </div>
          <div class="pull-right">

            <a class="btn btn-primary"href="{{ route('horses.index') }}">Back</a>
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

    <form action="{{ route('horses.update', $horse->id) }}" method="POST">
    @csrf

@method('PUT')
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Name </strong>
                    <input type="text" class="form-control" value="{{ $horse->name }}" name="name" placeholder="name">
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Runs </strong>
                    <input type="text" class="form-control" value="{{ $horse->runs }}" name="runs" placeholder="runs">
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Wins </strong>
                    <input type="text" class="form-control" value="{{ $horse->wins }}" name="wins" placeholder="wins">
                </div>
            </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>About </strong>
                    <input type="text" class="form-control" value="{{ $horse->about }}" name="about" placeholder="about">
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>



        </div>






    </form>





@endsection
