<?php

namespace App\Observers;

use App\Models\Training;


class TrainingObserver
{
    public function created(Training $training)
    {
        // Automatically create an entry in user_trainings table when a training is created
        foreach ($training->users as $user) {
            $user->trainings()->attach($training->id);
        }
    }
}
