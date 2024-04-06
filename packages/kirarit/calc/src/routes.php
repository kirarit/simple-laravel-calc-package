<?php

use Illuminate\Support\Facades\Route;

Route::get('calc', function () {
    return "Hello from the calc package!";
});

Route::get('add/{a}/{b}', [Kirarit\Calc\CalcController::class, 'add']);
Route::get('subtract/{a}/{b}', [Kirarit\Calc\CalcController::class, 'subtract']);
