 <?php

use Illuminate\Support\Facades\Route;

Route::prefix('user')->name('user.') ->group(function(){
    Route::get('/profile',function(){
        return 'Hello User';
    })->name('pro');
    Route::get('/m',function(){
        return 'Hi';
    })->name('m');
    Route::get('/b',function(){
        return 'Hello ';
    })->name('b');
    Route::get('/l',function(){
        return 'hk';
    })->name('l');
    Route::get('/mo',function(){
        return 'mlo';
    })->name('mo');
});

Route::get('subject/{name}',function($name){
return "subject $name";
})->whereAlpha('name');


