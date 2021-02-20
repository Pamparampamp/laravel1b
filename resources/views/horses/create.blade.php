

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

    <form action="{{ route('horses.store') }}" method="POST">
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
                    <strong>Runs </strong>
                    <input type="text" class="form-control" name="runs" placeholder="runs">
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Wins </strong>
                    <input type="text" class="form-control" name="wins" placeholder="wins">
                </div>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>About </strong>
                    <textarea id="mce" name="about" rows=10 cols=100 class="form-control"></textarea>

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
