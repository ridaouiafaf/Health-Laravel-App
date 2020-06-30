<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Route::redirect('/home', '/admin/posts');
Auth::routes();


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::resource('posts','PostController');
    Route::resource('links','LinkController');


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
