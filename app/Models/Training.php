<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'approach', 'provider', 'venue' ];
    

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_trainings', 'training_id', 'user_id')
                    ->withPivot('status') // If the pivot table contains additional columns
                    ->withTimestamps();
    }

    public function user_trainings()
{
    return $this->hasMany(User_training::class);
}

}
