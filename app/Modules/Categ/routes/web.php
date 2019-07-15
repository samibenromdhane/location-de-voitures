<?php

Route::group(['module' => 'Categ', 'middleware' => ['web'], 'namespace' => 'App\Modules\Categ\Controllers'], function() {

    Route::resource('Categ', 'CategController');

});
