<!DOCTYPE html>
<html>
    <link rel="stylesheet" href= "/css/app.css" >
<head>
    <title>Welcome,This is the Trainings Form</title>
</head>
<body>  
    <form method="POST" action="{{ route('trainings') }}">
        @csrf <!-- CSRF protection -->

        @if(session('success'))
        <div class='alert alert-success'>
            {{session('success')}}
        </div>
    @endif

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
        </div>

        <div>
            <label for="location">Location</label>
            <input type="text" id="location" name="location" required>
        </div>

        <div class="form-check">
            <input type="radio" id="approach" name="approach" value="online">
            <label for="approach">Online</label>
        </div>
        
        <div class="form-check">
            <input type="radio" id="classroom" name="approach" value="classroom">
            <label for="classroom">Classroom</label>
        </div>
       
        <div>
            <label for="provider">Provider</label>
            <input type="text" id="provider" name="provider" required>
        </div>

        
        <div>
            <label for="venue">Venue</label>
            <input type="text" id="venue" name="venue" required>
        </div>

        <div>
            <button type="submit">Register For Training</button>
        </div>

    </form>