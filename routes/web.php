<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\EmployeeController;

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

//for admin

Route::get('admin',[AdminController::class,'index']);
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');

Route::group(['middleware'=>'admin_auth'],function(){
    Route::get('admin/updatepass',[AdminController::class,'updatepass']);
    Route::get('admin/logout', function () {
        session()->forget('ADMIN_LOGIN',true);
        session()->forget('ADMIN_ID');
        session()->flash('error','Logout Successfully');
        return redirect('admin');
    });
    Route::get('admin/dashboard',[AdminController::class,'dashboard']);

    Route::get('admin/company',[CompanyController::class,'index']);
    Route::get('admin/company/manage-company',[CompanyController::class,'manage_company']);
    Route::get('admin/company/manage-company/{id}',[CompanyController::class,'manage_company']);
    Route::post('admin/company/manage-company-process',[CompanyController::class,'manage_company_process'])->name('company.manage_company_process');
    Route::get('admin/company/delete/{id}',[CompanyController::class,'delete']);
	Route::get('admin/company/status/{status}/{id}',[CompanyController::class,'status']);
    
    Route::get('admin/employee',[EmployeeController::class,'index']);
    Route::get('admin/employee/manage-employee',[EmployeeController::class,'manage_employee']);
    Route::get('admin/employee/manage-employee/{id}',[EmployeeController::class,'manage_employee']);
    Route::post('admin/employee/manage-employee-process',[EmployeeController::class,'manage_employee_process'])->name('employee.manage_employee_process');
    
});

