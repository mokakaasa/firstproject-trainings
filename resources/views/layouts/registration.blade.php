@extends('layouts.app')

@section('content')
    <h2>Welcome to the Registaration Page</h2>

    {!! Form::open([ 'action' => '\App\Http\Controllers\Auth\RegisterController@showRegistrationForm' , 'method' => 'POST']) !!}
        <!-- Your form fields go here -->
        <!-- For example: -->
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password_confirmation', 'Password_confirmation:') !!}
            {!! Form::password('password_confirmation', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        </div>

        @include('connection.connect')

    {!! Form::close() !!}
@endsection
