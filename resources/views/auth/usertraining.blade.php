<!DOCTYPE html>
<html>
    <link rel="stylesheet" href= "/css/app.css" >
<head>
    <title>Welcome,This is the Trainings Form</title>
</head>
<body>  
    <form method="POST" action="{{ route('usertrainings') }}">
        @csrf <!-- CSRF protection -->

        @if(session('success'))
        <div class='alert alert-success'>
            {{session('success')}}
        </div>
    @endif

        <div class="form-check">
            <input type="radio" id="approved" name="status" value="approved">
            <label for="approved">Approved</label>
        </div>
        
        <div class="form-check">
            <input type="radio" id="pending" name="status" value="pending">
            <label for="pending">Pending</label>
        </div>
       
       

        <div>
            <button type="submit">Register For Training</button>
        </div>

    </form>