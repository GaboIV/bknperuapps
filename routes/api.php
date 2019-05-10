<?php

use Illuminate\Http\Request;

Route::resource('users', 'User\UserController', ['except' => ['create', 'edit']]);

