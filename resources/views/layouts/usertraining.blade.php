@extends('layouts.app')

@section('content')
    <h2>Welcome to the Training Page</h2>

    {!! Form::open([ 'action' => '\App\Http\Controllers\Auth\UserTrainingController' , 'method' => 'POST']) !!}
        <div class="form-check">
            {!! Form::radio('status', 'approved', false, ['class' => 'form-check-input']) !!}
            {!! Form::label('approved', 'Approved', ['class' => 'form-check-label']) !!}
        </div>
    
        <div class="form-check">
            {!! Form::radio('status', 'pending', false, ['class' => 'form-check-input']) !!}
            {!! Form::label('pending', 'Pending', ['class' => 'form-check-label']) !!}
        </div>
        
    

        @include('connection.connect')

    {!! Form::close() !!}
@endsection
