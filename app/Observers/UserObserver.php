<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    
    public function created(User $user)
    {
        // Automatically create an entry in user_trainings table when a user is created
        $user->trainings()->attach($user->training_id);
    }
}
