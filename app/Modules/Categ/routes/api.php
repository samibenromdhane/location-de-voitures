<?php

Route::group(['module' => 'Categ', 'middleware' => ['api'], 'namespace' => 'App\Modules\Categ\Controllers'], function() {

    Route::resource('Categ', 'CategController');

});
