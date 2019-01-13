<?php

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*
 * Route For Superuser
 */
Route::group(['middleware' => ['role:superuser']], function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', function () {
            return view('backend.dashboard.dashboard');
        })->name('dashboard.index');
        Route::get('user', 'HomeController@dataUser')->name('data.user');
        Route::get('users/{id}', function ($id) {
        });
    });
});

/*
 * Create Role,Permission And Give User Role to Superuser Role
 */

Route::get('/assign', function () {
    $user = auth()->user();
    $role = Role::create(['name' => 'superuser']);
    $permission = Permission::create(['name' => 'crud']);
    $role->givePermissionTo($permission);
    $user->assignRole('superuser');
});

Route::get('/permission', function () {
    Permission::create(['name' => 'insert']);
    Permission::create(['name' => 'edit']);
    Permission::create(['name' => 'delete']);
});
