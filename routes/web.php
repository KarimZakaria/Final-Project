<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Front')->group(function()
{

    Route::get('/' , 'HomepageController@index')->name('Front.Homepage');
    // ->name Make That To Call By Name When Using The (URL) 
    
    
    Route::get('/cat/{id}' , 'CourseController@cat')->name('Front.cat');
    
    Route::get('/cat/{id}/course/{c_id}' , 'CourseController@show')->name('Front.show') ;
    
    Route::get('/contact' , 'ContactController@index')->name('Front.contact') ;

    Route::post('/message/newsletter' , 'MessageController@newsletter')->name('Front.message.newsletter') ;

    Route::post('/message/contact' , 'MessageController@contact')->name('Front.message.contact') ;

    Route::post('/message/enroll' , 'MessageController@enroll')->name('Front.message.enroll') ;
});

Route::namespace('Admin')->prefix('dashboard')->group(function()
{

    Route::get('/login' , 'AuthController@login')->name('Admin.Auth.login');

    Route::post('/doLogin' , 'AuthController@dologin')->name('Admin.Auth.doLogin'); 

    Route::middleware('adminAuth:admin')->group(function()
    { 

        Route::get('/' , 'HomeController@index')->name('Admin.index') ; 

        Route::get('/logout' , 'AuthController@logout')->name('Admin.Auth.logout'); 
        
        // Start Categories Routes
        Route::get('/cats' , 'CatController@index')->name('Admin.Cat.index') ; 

        Route::get('/cats/create' , 'CatController@create')->name('Admin.Cat.create') ;
        Route::post('/cats/store' , 'CatController@store')->name('Admin.Cat.store') ; 
 
        Route::get('/cats/edit/{id}' , 'CatController@edit')->name('Admin.Cat.edit') ; 

        Route::post('/cats/update' , 'CatController@update')->name('Admin.Cat.update') ; 
        
        Route::get('/cats/delete/{id}' , 'CatController@delete')->name('Admin.Cat.delete') ;
        // End Categories Routes

        //Start Trainers Routes
        Route::get('/trainers' , 'TrainerController@index')->name('Admin.Trainer.index') ; 

        Route::get('/trainers/create' , 'TrainerController@create')->name('Admin.Trainer.create') ;
        Route::post('/trainers/store' , 'TrainerController@store')->name('Admin.Trainer.store') ; 
 
        Route::get('/trainers/edit/{id}' , 'TrainerController@edit')->name('Admin.Trainer.edit') ; 

        Route::post('/trainers/update' , 'TrainerController@update')->name('Admin.Trainer.update') ; 
        
        Route::get('/trainers/delete/{id}' , 'TrainerController@delete')->name('Admin.Trainer.delete') ; 
        //End Trainers Routes

        // Start Course Routes 
        Route::get('/courses' , 'CourseController@index')->name('Admin.Courses.index') ; 

        Route::get('/courses/create' , 'CourseController@create')->name('Admin.Courses.create') ;
        Route::post('/courses/store' , 'CourseController@store')->name('Admin.Courses.store') ; 
 
        Route::get('/courses/edit/{id}' , 'CourseController@edit')->name('Admin.Courses.edit') ; 

        Route::post('/courses/update' , 'CourseController@update')->name('Admin.Courses.update') ; 
        
        Route::get('/courses/delete/{id}' , 'CourseController@delete')->name('Admin.Courses.delete') ;

        // Start Student Routes
        Route::get('/students' , 'StudentController@index')->name('Admin.Students.index') ; 

        Route::get('/students/create' , 'StudentController@create')->name('Admin.Students.create') ;
        Route::post('/students/store' , 'StudentController@store')->name('Admin.Students.store') ; 
 
        Route::get('/students/edit/{id}' , 'StudentController@edit')->name('Admin.Students.edit') ; 

        Route::post('/students/update' , 'StudentController@update')->name('Admin.Students.update') ; 
        
        Route::get('/students/delete/{id}' , 'StudentController@delete')->name('Admin.Students.delete') ;

        Route::get('students/showCourses/{id}' , 'StudentController@showCourses')->name('Admin.Students.showCourses');

        Route::get('/students/{id}/courses/{c_id}/approve' , 'StudentController@approveCourse')->name('Admin.Students.approveCourse') ;

        Route::get('/students/{id}/courses/{c_id}/reject' , 'StudentController@rejectCourse')->name('Admin.Students.rejectCourse') ;

    });
});
