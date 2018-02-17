<?php
Route::namespace('PHPCollective\Contributors\Controllers')
    ->group(function () {
        Route::get('humans.txt', 'ContributorsController');
    });
