@extends('layouts.app')

@section('content')
    <h2>Welcome to the Training Page</h2>

    {!! Form::open([ 'action' => '\App\Http\Controllers\Auth\TrainingController' , 'method' => 'POST']) !!}
        <!-- Your form fields go here -->
        <!-- For example: -->
      
        
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('location', 'Location:') !!}
            {!! Form::text('location', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-check">
            {!! Form::radio('approach', 'online', false, ['class' => 'form-check-input']) !!}
            {!! Form::label('online', 'Online', ['class' => 'form-check-label']) !!}
        </div>
    
        <div class="form-check">
            {!! Form::radio('approach', 'classroom', false, ['class' => 'form-check-input']) !!}
            {!! Form::label('classroom', 'Classroom', ['class' => 'form-check-label']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('provider', 'Provider:') !!}
            {!! Form::text('provider', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('venue', 'Venue:') !!}
            {!! Form::text('venue', null, ['class' => 'form-control']) !!}
        </div>

        @include('connection.connect')

    {!! Form::close() !!}
@endsection
