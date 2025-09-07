<?php

use Illuminate\Support\Facades\Broadcast;
use App\Http\Resources\UserRessource;

Broadcast::channel('online', function ($user) {
    return $user ? new UserRessource($user) : null;
});
