<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User_training;
use App\Models\User;
use App\Models\Training;
use Illuminate\Http\Request;




class UserTrainingController extends Controller
{
  
    public function showAssignPage()
    {
        $trainings = Training::all();
        
        $users = User::all(); // Fetch all users
    
        return view('auth.assign', compact('trainings', 'users'));
    }
    
    public function assignUser(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'training_id' => 'required|exists:trainings,id',
            'status' => 'required|string|in:pending,approved',
        ]);
    
        $user = User::find($request->input('user_id'));
        $training = Training::find($request->input('training_id'));
    
        $userTraining = new User_training([
            'status' => $request->input('status'),
        ]);
    
        // Associate the user and training
        $userTraining->user()->associate($user);
        $userTraining->training()->associate($training);
    
        $userTraining->save();
    
        return 'User assigned to training successfully.';
    }

    public function showUserDetails($userName)
    {
        // Find the user by their name
        $user = User::where('name', $userName)->first();
        
    
        if (!$user) {
            // Handle the case where the user with the specified name is not found
            return  'User not found.';
        }

        $userTrainings = User_training::with('training')->where('user_id',$user->id)->get();

        return view('auth.show', compact('user', 'userTrainings'));
    }

   

}   
