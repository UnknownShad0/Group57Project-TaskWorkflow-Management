ls
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BudgetController;
use App\Http\Controllers\API\CalendarController;
use App\Http\Controllers\API\CommunicationController;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\SupplierController;
use App\Http\Controllers\API\InventoryController;
use App\Http\Controllers\API\DeveloperProjectController;
use App\Http\Controllers\API\FacilityManagementController;
use App\Http\Controllers\API\LegalContractController;
use App\Http\Controllers\API\MeetingsCalendarController;
use App\Http\Controllers\API\RiskController;
use App\Http\Controllers\API\SubcontractorController;
use App\Http\Controllers\API\TaskListController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('/projects',ProjectController::class);


// Route::get('/group1/projects', [DeveloperProjectController::class,"index"]);
// Route::post('/group1/projects/store', [DeveloperProjectController::class,"store"]);
// Route::get('/group1/projects/notification', [DeveloperProjectController::class,"hasNotification"]);


Route::get("supplier/pending", [SupplierController::class,"pending"]);
Route::get("inventory/pending", [InventoryController::class,"pending"]);
Route::get("subcontractor/pending", [SubcontractorController::class,"pending"]);



// Send Request

Route::get("supplier/pending", [SupplierController::class,"pending"]);
Route::apiResource("supplier", SupplierController::class);

Route::get("inventory/pending", [InventoryController::class,"pending"]);
Route::apiResource("inventory", InventoryController::class);

Route::get("subcontractor/pending", [SubcontractorController::class,"pending"]);
Route::apiResource("subcontractor", SubcontractorController::class);


Route::get("budget-financial/pending", [BudgetController::class,"pending"]);
Route::apiResource("budget-financial", BudgetController::class);


Route::get("facility-management/pending", [FacilityManagementController::class,"pending"]);
Route::apiResource("facility-management", FacilityManagementController::class);


Route::get("legal-contract/pending", [LegalContractController::class,"pending"]);
Route::apiResource("legal-contract", LegalContractController::class);


Route::get("risk/pending", [RiskController::class,"pending"]);
Route::apiResource("risk", RiskController::class);

Route::get("communication/pending", [CommunicationController::class,"pending"]);
Route::apiResource("communication", CommunicationController::class);


Route::get("meetings/pending", [MeetingsCalendarController::class,"pending"]);
Route::apiResource("meetings", MeetingsCalendarController::class);

//try lang -jm
Route::apiResource('tasklists', TaskListController::class); // mali yung controller name - yung sa calendar na table pwede dito or sa task list table nga

Route::get("project/pending", [ProjectController::class,"pending"]);
Route::apiResource('project', ProjectController::class);
// fetch calendar and timeline

Route::get("calendar", [CalendarController::class,"getCalendar"])->name("calendar");
Route::get("calendar/requests", [CalendarController::class,"getCalendarRequests"])->name("requests");


