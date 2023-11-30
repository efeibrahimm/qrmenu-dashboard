<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\dashboard\BlogCategoryController;
use App\Http\Controllers\dashboard\BlogController;
use App\Http\Controllers\dashboard\CkeditorController;
use App\Http\Controllers\dashboard\ContactController;
use App\Http\Controllers\dashboard\HakkimizdaController;
use App\Http\Controllers\dashboard\HizmetlerCategories;
use App\Http\Controllers\dashboard\HizmetlerController;
use App\Http\Controllers\dashboard\HizmetlerDetayController;
use App\Http\Controllers\dashboard\LoginController;
use App\Http\Controllers\dashboard\ReferansCategoryController;
use App\Http\Controllers\dashboard\ReferansController;
use App\Http\Controllers\dashboard\SettingController as DashboardSettingController;
use App\Http\Controllers\dashboard\SssCategoryController;
use App\Http\Controllers\dashboard\SssController;
use App\Http\Controllers\dashboard\TarihceController;
use App\Http\Controllers\dashboard\TeamController;
use App\Http\Controllers\dashboard\UsersController;
use App\Http\Controllers\dashboard\SliderController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\general\BlogController as GeneralBlogController;
use App\Http\Controllers\general\HakkimizdaController as GeneralHakkimizdaController;
use App\Http\Controllers\general\HizmetlerController as GeneralHizmetlerController;
use App\Http\Controllers\general\ReferansController as GeneralReferansController;
use App\Http\Controllers\general\SSSController as GeneralSSSController;
use App\Http\Controllers\general\TeamController as GeneralTeamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReferansController as ControllersReferansController;
use App\Http\Controllers\VideoController;
use App\Models\Feedback;
use App\Models\Services;
use App\Models\ServicesCategory;

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

// Route::get('/',[HomeController::class,'index']);

Route::get('/allmenu', [HizmetlerCategories::class, 'allmenu']);
Route::post('/feedback', [FeedbackController::class, 'store']);


Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login']);
Route::prefix('/')->middleware('auth')->group(function () {
    Route::get('/', function () {
        $totalMenuItem = Services::count();
        $totalMenuCategory = ServicesCategory::count();
        $feedback = Feedback::count();
        return view('dashboard.home',['category'=>$totalMenuCategory,'totalMenuItem'=> $totalMenuItem,'feedback'=> $feedback]);
    });
    Route::get('/logout',[LoginController::class,'logout']);
   

    // Kullanicilar
    Route::get('/kullanicilar', [UsersController::class, 'index']);
    Route::get('/kullanicilar/add', [UsersController::class, 'add']);
    Route::get('/kullanicilar/add/{id}', [UsersController::class, 'edit']);
    Route::post('/kullanicilar/add', [UsersController::class, 'store']);
    Route::get('/kullanicilar/del/{id}', [UsersController::class, 'del']);
    // Kullanicilar
    // ayarlar
    Route::get('/contact', [ContactController::class, 'index']);
    Route::get('/contact/add', [ContactController::class, 'add']);
    Route::get('/contact/add/{id}', [ContactController::class, 'edit']);
    Route::post('/contact/add', [ContactController::class, 'store']);
    Route::get('/contact/del/{id}', [ContactController::class, 'del']);
    // ayarlar
    // ayarlar
    Route::get('/hizmetler', [HizmetlerController::class, 'index']);
    Route::get('/hizmetler/add', [HizmetlerController::class, 'add']);
    Route::get('/hizmetler/add/{id}', [HizmetlerController::class, 'edit']);
    Route::post('/hizmetler/add', [HizmetlerController::class, 'store']);
    Route::get('/hizmetler/del/{id}', [HizmetlerController::class, 'del']);
    Route::get('/hizmetler/subcategories/{id}', [HizmetlerController::class, 'subcategories']);
    // ayarlar
    // ayarlar
    Route::get('/videos', [VideoController::class, 'index']);
    Route::get('/videos/add', [VideoController::class, 'add']);
    Route::get('/videos/add/{id}', [VideoController::class, 'edit']);
    Route::post('/videos/add', [VideoController::class, 'store']);
    Route::get('/videos/del/{id}', [VideoController::class, 'del']);
    Route::get('/videos/change/{id}', [VideoController::class, 'changeVisible']);
    // ayarlar
    // ayarlar
    Route::get('/hizmetler/detay/{id}', [HizmetlerDetayController::class, 'index']);
    Route::get('/hizmetler/detay/add/{id}', [HizmetlerDetayController::class, 'add']);
    Route::get('/hizmetler/detay/add/{service_id}/{id}', [HizmetlerDetayController::class, 'edit']);
    Route::post('/hizmetler/detay/add', [HizmetlerDetayController::class, 'store']);
    Route::get('/hizmetler/detay/del/{id}', [HizmetlerDetayController::class, 'del']);
    // ayarlar
    Route::get('/hizmetler/kategori', [HizmetlerCategories::class, 'index']);
    Route::get('/hizmetler/kategori/add', [HizmetlerCategories::class, 'add']);
    Route::get('/hizmetler/kategori/add/{id}', [HizmetlerCategories::class, 'edit']);
    Route::post('/hizmetler/kategori/add', [HizmetlerCategories::class, 'store']);
    Route::get('/hizmetler/kategori/del/{id}', [HizmetlerCategories::class, 'del']);

    Route::get('/feedback', [FeedbackController::class, 'index']);
    Route::get('/feedback/del/{id}', [FeedbackController::class, 'del']);


});
