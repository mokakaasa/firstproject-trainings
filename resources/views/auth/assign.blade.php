<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Training to User</title>
</head>
<body>
    <h1>Assign Training to User</h1>

    <form method="post" action="{{ route('assign') }}">
        @csrf

           <!-- Select a user -->
           <label for="user_id">Select User:</label>
           <select name="user_id" id="user_id">
               @foreach (\App\Models\User::all() as $user)
                   <option value="{{ $user->id }}">{{ $user->name }}</option>
               @endforeach
           </select>

           <label for="training_id">Training :</label>
<select name="training_id" id="training_id">
    @foreach (\App\Models\Training::all() as $training)
        <option value="{{ $training->id }}">{{ $training->name }}</option>
    @endforeach
</select>
           
   
           <label>Status:</label>
           <input type="radio" id="status_approved" name="status" value="approved" required>
           <label for="status_approved">Approved</label>
   
           <input type="radio" id="status_pending" name="status" value="pending" required>
           <label for="status_pending">Pending</label>
   
         
   

        <!-- Submit button -->
        <button type="submit">Assign Training to User</button>
    </form>
</body>
</html>
