

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

    <form action="{{ route('betters.update', $better->id) }}" method="POST">
    @csrf

@method('PUT')
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Name </strong>
                    <input type="text" class="form-control" value="{{ $better->name }}" name="name" placeholder="name">
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Surname </strong>
                    <input type="text" class="form-control" value="{{ $better->surname }}" name="surname" placeholder="runs">
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bets </strong>
                    <input type="text" class="form-control" value="{{ $better->bet }}" name="bet" placeholder="wins">
                </div>
            </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Horse_id </strong>
                    <input type="text" class="form-control" value="{{ $better->horse_id }}" name="horse_id" placeholder="about">
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
