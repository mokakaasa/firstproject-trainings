@extends('layouts.app')

@section('content')
    <h1>User Details</h1>

    <p>User Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <!-- Other details -->
    
    
    <h1>Training Details</h1>
    @foreach($userTrainings as $userTraining)
       <p>Training: {{ $userTraining->training->name }} - {{ $training->status }}</p>
  
    @endforeach

    {{-- <h1>User Training Details</h1>
    @foreach($userTrainings as $userTraining)
       <p>Status: {{ $userTraining->status }}</p>
    @endforeach --}}
@endsection
