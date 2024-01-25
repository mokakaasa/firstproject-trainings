@extends('layouts.app')

@section('content')
    <h2>Welcome to the Login Page</h2>

    {!! Form::open([ 'action' => '\App\Http\Controllers\Auth\LoginController@showLoginForm' , 'method' => 'POST']) !!}
        <!-- Your form fields go here -->
        <!-- For example: -->
      
        
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('remember', 'Remember:') !!}
            {!! Form::checkbox('remember', '1', false, ['class' => 'form-check-input']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        </div>

        @include('connection.connect')

    {!! Form::close() !!}
@endsection
