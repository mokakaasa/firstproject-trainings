<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule; // Import Rule class
use App\Models\User_training;
use App\Models\Training; // Assuming Training model is in the App\Models namespace

class TrainingController extends Controller
{
    public function showTrainingForm()
    {
        return view('auth.trainings');
    }

    public function trainingRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'approach' => 'required|string|in:online,classroom',
            'provider' => 'required|string|max:255',
            'venue' => 'required|string|max:255',
        ]);

        $training = Training::create([
            'name' => $request->input('name'),  #  $request->name,
            'location' => $request->input('location'),
            'approach' => $request->input('approach'),
            'provider' => $request->input('provider'),
            'venue' => $request->input('venue'),
        ]);
 

    // Redirect or respond as needed
    return 'Successfully registered for training. Congratulations!';


    }

    public function showAllTrainings()
    {
        $trainings = Training::all();

        return view('auth.alltrainings', ['trainings' => $trainings]);
    }

    

   
    public function updateTraining(Request $request, $id)
    {
        $data =  $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'approach' => 'required|string|in:online,classroom',
            'provider' => 'required|string|max:255',
            'venue' => 'required|string|max:255',
        ]);

        $training = Training::findOrFail($id);
        $training->update($data);
        // $training->update($request->all());

        return 'Training updated successfully.';
    }

    public function deleteTraining($id)
    {
        $training = Training::findOrFail($id);
        $training->delete();

        return 'Training deleted successfully.';
    }

}