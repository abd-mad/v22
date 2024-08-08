<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function() {
    return 'Home page';
});

Route::get('contact',function() {
    return 'contact us';
});

Route::get('/',function(){
return'Home page';
});

Route::get('/about-me',function(){

    return 'About Us';
});

// Route::get('/course/{name}',function($name){
// return 'course is :'.$name ;

// });     
// Route::get('/m/{jn}/{hours?}',function($jn ,$hours=0){
//     if ($hours==0) {
//         return 'my name is :'.$jn;
//     }else{
//         return 'my name is :'.$jn.' and hours is :'.$hours;
//     }
//     return 'my name is :'.$jn ."&hour course =". $hours;
 
// });


// Route::get('/sessions /{Name}/{type?}',function($Name, $type ='online') {
//     return "course: $Name & type: $type";
// }); 
// // Route::get('/',function(){
//     $link =Route::get('about')
//     return'<a href='$link'> About us </a>';
//  });

