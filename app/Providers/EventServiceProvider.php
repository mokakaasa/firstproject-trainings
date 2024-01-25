<?php

 // App\Providers\EventServiceProvider.php

namespace App\Providers;

use App\Models\User;
use App\Observers\UserObserver;
use App\Models\Training;
use App\Observers\TrainingObserver;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        // Other event listeners...

        User::class => [
            UserObserver::class,
        ],

        Training::class => [
            TrainingObserver::class,
        ],
    ];
}


