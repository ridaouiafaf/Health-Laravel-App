<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Route::redirect('/home', '/posts');
Auth::routes();


Route::group(['prefix' => '', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    //News Feed
    Route::resource('posts','PostController');
    Route::get('newsfeed','PostController@index')->name('posts.index');
    Route::post('newsfeed','PostController@index')->name('posts.index');

    
    // Beneficial Links
    Route::resource('links','LinkController');

    //Donations 
    Route::resource('donations','DonationController');
    Route::get('donations/urgent','DonationController@indexUrgent')->name('donations.urgent.index');
    Route::post('donations/urgent','DonationController@indexUrgent')->name('donations.urgent.index');
    Route::get('donations/benevole','DonationController@indexBenevole')->name('donations.benevole.index');
    Route::post('donations/benevole','DonationController@indexBenevole')->name('donations.benevole.index');
    

    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Services
    Route::delete('services/destroy', 'ServicesController@massDestroy')->name('services.massDestroy');
    Route::resource('services', 'ServicesController');

    // Employees
    Route::delete('employees/destroy', 'EmployeesController@massDestroy')->name('employees.massDestroy');
    Route::post('employees/media', 'EmployeesController@storeMedia')->name('employees.storeMedia');
    Route::resource('employees', 'EmployeesController');

    //Patientts
    Route::delete('patients/destroy', 'PatientsController@massDestroy')->name('patients.massDestroy');
    Route::resource('patients', 'PatientsController');

    // Appointments
    Route::delete('appointments/destroy', 'AppointmentsController@massDestroy')->name('appointments.massDestroy');
    Route::resource('appointments', 'AppointmentsController');

    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
});
