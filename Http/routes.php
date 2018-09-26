<?php

Route::group(['middleware' => 'web', 'prefix' => 'module2', 'namespace' => 'Modules\Module2\Http\Controllers'], function()
{
    Route::get('/menu-1', 'Module2Controller@menu1');
    Route::get('/menu-2', 'Module2Controller@menu2');
});
