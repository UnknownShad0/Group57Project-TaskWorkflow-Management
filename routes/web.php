<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SendRequestController;
use App\Http\Controllers\SubsystemController;
use App\Http\Controllers\taskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/home',[DashboardController::class,'index'])->name('dashboard.index');

    Route::get('/dashboardAdmin/createProj',[DashboardController::class,'createProj'])->middleware('admin')->name('dashboard.createProj');
    Route::get('/dashboardAdmin/{db}/editProj',[DashboardController::class,'editProj'])->middleware('admin')->name('dashboard.editProj');
     Route::post('/dashboardAdmin/addProj',[DashboardController::class,'addProj'])->name('dashboard.addProj');




    Route::put('/dashboardAdmin/{db}/updateProj',[DashboardController::class,'updateProj'])->name('dashboard.updateProj');





    Route::delete('/dashboardAdmin/{dbProject}/destroyProj',[DashboardController::class,'destroyProj'])->middleware('admin')->name('dashboard.destroyProj');

    Route::get('/dashboardAdmin/createWorker',[DashboardController::class,'createWorker'])->middleware('admin')->name('dashboard.createWorker');
    Route::post('/dashboardAdmin/addWorker',[DashboardController::class,'addWorker'])->name('dashboard.addWorker');
    Route::get('/dashboardAdmin/{worker}/editWorker',[DashboardController::class,'editWorker'])->middleware('admin')->name('dashboard.editWorker');
    Route::put('/dashboardAdmin/{worker}/updateWorker',[DashboardController::class,'updateWorker'])->name('dashboard.updateWorker');
    Route::delete('/dashboardAdmin/{worker}/destroyWorker',[DashboardController::class,'destroyWorker'])->middleware('admin')->name('dashboard.destroyWorker');

    Route::get('/dashboardAdmin/completed',[DashboardController::class,'completed'])->middleware('admin')->name('dashboard.completed');
    Route::post('/dashboardAdmin/store',[DashboardController::class,'store'])->name('completed.store');
    Route::get('/dashboardAdmin/{complete}/edit',[DashboardController::class,'edit'])->middleware('admin')->name('dashboard.edit');
    Route::put('/dashboardAdmin/{complete}/submit',[DashboardController::class,'submit'])->name('completed.submit');
    Route::delete('/dashboardAdmin/{complete}/destroy',[DashboardController::class,'destroy'])->middleware('admin')->name('dashboard.destroy');
/////
/////


    Route::get('/createProject',[projectController::class,'index'])->name('create.index');
    Route::post('/createProject/storeProj',[projectController::class,'storeProj'])->middleware('ClientAdmin')->name('create.storeProj');

    Route::get('/projectPendingAdmin',[projectController::class,'adminPending'])->name('admin.pending');
    Route::delete('/projectPendingAdmin/{project}/rejectProj',[projectController::class,'rejectProj'])->middleware('admin')->name('admin.rejectProj');

    Route::get('/projectRequestAdmin',[projectController::class,'adminRequest'])->name('admin.request');
    ///////
    ///////


    Route::get('/task/index',[taskController::class,'index'])->name('task.index');

    Route::get('/task/timeline',[taskController::class,'timeline'])->name('task.timeline');

    Route::get('/taskAdmin/create/{projectId?}',[taskController::class,'create'])->middleware('ClientAdmin')->name('taskAdmin.create');
    Route::post('/task/submit',[taskController::class,'submit'])->name('task.submit');

    Route::get('/task/{task}/edit',[taskController::class,'edit'])->name('task.edit');
    Route::put('/task/{task}/save',[taskController::class,'save'])->name('task.save');

    Route::get('/task/{task}/approval',[taskController::class,'approval'])->middleware('ClientAdmin')->name('task.approval');
    Route::put('/task/{task}/action',[taskController::class,'action'])->name('task.action');
    Route::delete('/task/{task}',[taskController::class,'destroy'])->middleware('ClientAdmin')->name('task.destroy');


    // Route::resource("/first-step", FirstStepController::class);
    Route::resource("/send-request", SendRequestController::class);
    Route::resource("/employees", EmployeeController::class);
});



// Route::resource("/first-step", FirstStepController::class);
// Route::resource("/send-request", SendRequestController::class);
// Route::post("/send-request", [SendRequestController::class,'store'])->name("send-request.store");
// Route::post("/send-request", [SendRequestController::class,'store'])->name("send-request.store");

// Route::get('/submsystem/asset_inventory',[SubsystemController::class,'asset_inventory'])->name('asset_inventory');
// Route::get('/submsystem/supplier_vendor',[SubsystemController::class,'supplier_vendor'])->name('supplier_vendor');
// Route::get('/submsystem/subcontractor',[SubsystemController::class,'subcontractor'])->name('subcontractor');
// //post subcontractor -> kasi wala eis na ganto eh
// //get
// //edit

// Route::get('/submsystem/budgeting_financial',[SubsystemController::class,'budgeting_financial'])->name('budgeting_financial');
// Route::get('/submsystem/facility_management',[SubsystemController::class,'facility_management'])->name('facility_management');
// Route::get('/submsystem/legal_contract',[SubsystemController::class,'legal_contract'])->name('legal_contract');
// Route::get('/submsystem/risk',[SubsystemController::class,'risk'])->name('risk');
// Route::get('/submsystem/communication_collab',[SubsystemController::class,'asset_inventory'])->name('asset_inventory');
// Route::get('/submsystem/meetings_calendar',[SubsystemController::class,'meetings_calendar'])->name('meetings_calendar');

require __DIR__.'/auth.php';
