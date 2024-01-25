<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_training extends Model
{
    use HasFactory;

    protected $fillable = [ 'user_id', 'training_id','status'];



    // Define the relationship with Training model
    public function training()
    {
        return $this->belongsTo(Training::class , "training_id");
      
    }

    public function user()
    {
        return $this->belongsTo(User::class , "user_id");
      
    }



}
