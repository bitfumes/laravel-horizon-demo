<?php

use App\User;
use App\Notifications\NotifyUser;

Route::get('/', function () {
    User::all()->each->notify(new NotifyUser());
    return 'done';
});
