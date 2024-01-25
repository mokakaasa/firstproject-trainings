<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\TrainingController;
use App\Http\Controllers\Auth\UserTrainingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::get('trainings', [TrainingController::class, 'showTrainingForm'])->name('trainings');
    Route::post('trainings', [TrainingController::class, 'trainingRegistration']);

    Route::get('alltrainings', [TrainingController::class, 'showAllTrainings'])->name('alltrainings');

   
    Route::put('alltrainings/{id}', [TrainingController::class, 'updateTraining'])->name('updatetraining');
    Route::delete('alltrainings/{id}', [TrainingController::class, 'deleteTraining'])->name('deletetraining');


    Route::get('assign', [UserTrainingController::class, 'showAssignPage'])->name('assign');
    Route::post('assign', [UserTrainingController::class, 'assignUser']);
    Route::get('show/{userName}', [UserTrainingController::class, 'showUserDetails'])->name('show');


});

require __DIR__.'/auth.php';
