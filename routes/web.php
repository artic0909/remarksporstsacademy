<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminAdmissionFormController;
use App\Http\Controllers\AdminContactSupportController;
use App\Http\Controllers\AdminGalleryController;
use App\Http\Controllers\AdminNormalSessionController;
use App\Http\Controllers\AdminOptionalSessionController;
use App\Http\Controllers\AdminRSPLstoreController;
use App\Http\Controllers\AdminTournamentsCategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PdfController;

use App\Http\Controllers\MetaTagController;
use App\Http\Controllers\SEOController;

Route::resource('meta-tags', MetaTagController::class);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';






// front-end view =================================================================================================================================================================>
Route::get('/', [FrontController::class, 'home'])->name('home');

Route::get('/about', [FrontController::class, 'about'])->name('about');

Route::get('/normal-session', [FrontController::class, 'normal_session'])->name('normal_session');

Route::get('/optional-session', [FrontController::class, 'optional_session'])->name('optional_session');

Route::get('/tournaments', [FrontController::class, 'tournaments'])->name('tournaments');

Route::get('/gallery', [FrontController::class, 'gallery' , 'getAPIdata'])->name('gallery');

Route::get('/contact-us', [FrontController::class, 'contact'])->name('contact-us');
Route::post('/contact', [FrontController::class, 'cantact_form'])->name('contact.submit');

Route::get('/rspl-store', [FrontController::class, 'rspl_stores'])->name('rspl-store');

Route::get('/admission-now', [FrontController::class, 'admission'])->name('admission-now');
Route::post('/admission', [FrontController::class, 'admission_form'])->name('admission_form');














// admin-panel view ===================================================================================================================================>
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/admin-home', function () {
    return view('admin.admin_homePage');
})->middleware(['auth', 'verified'])->name('admin-home');


Route::get('/admin-about', function () {
    return view('admin.admin_aboutPage');
})->middleware(['auth', 'verified'])->name('admin-about');


Route::get('/admin-normal-session', function () {
    return view('admin.admin_normalSession');
})->middleware(['auth', 'verified'])->name('admin-normal-session');


Route::get('/admin-optional-session', function () {
    return view('admin.admin_optionalSession');
})->middleware(['auth', 'verified'])->name('admin-optional-session');


Route::get('/admin-tournament', function () {
    return view('admin.admin_tournamentsPage');
})->middleware(['auth', 'verified'])->name('admin-tournament');


Route::get('/admin-gallery', function () {
    return view('admin.admin_galleryPage');
})->middleware(['auth', 'verified'])->name('admin-gallery');


Route::get('/admin-support', function () {
    return view('admin.admin_contactPage');
})->middleware(['auth', 'verified'])->name('admin-support');


Route::get('/admin-store', function () {
    return view('admin.admin_rsplStores');
})->middleware(['auth', 'verified'])->name('admin-store');


Route::get('/admin-admission', function () {
    return view('admin.admin_addmission');
})->middleware(['auth', 'verified'])->name('admin-admission');


Route::get('/admin-pdf', function () {
    return view('admin.admin_pdf');
})->middleware(['auth', 'verified'])->name('admin-pdf');


Route::get('/admin-seoo', function () {
    return view('admin.admin_seoPage');
})->middleware(['auth', 'verified'])->name('admin-seo');







// ===================================================================================================================================================================================
// =========================>>>>>>>>>>>>>>>>>>>>>> API ROUTES <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<==========================================================================================
// ===================================================================================================================================================================================



// =============================================admin home all routes==========================================================================
Route::get('/admin-home', [AdminHomeController::class, 'home_banner_data_get', 'future_focus_get'])->name('admin-home');


Route::post('/admin-home/add', [AdminHomeController::class, 'home_banner_data_add'])->name('home_banner_data_add');
Route::put('/admin-home/update/{id}', [AdminHomeController::class, 'home_banner_data_update'])->name('home_banner_data_update');
Route::delete('/admin-home/delete/{id}', [AdminHomeController::class, 'home_banner_data_delete'])->name('home_banner_data_delete');


Route::post('/admin-home/future-add', [AdminHomeController::class, 'future_focus_add'])->name('future_focus_add');
Route::put('/future-focus/update/{id}', [AdminHomeController::class, 'future_focus_update'])->name('future_focus_update');
Route::delete('/future-focus/delete/{id}', [AdminHomeController::class, 'future_focus_delete'])->name('future_focus_delete');


Route::post('/admin-home/collab-add', [AdminHomeController::class, 'collaboration_add'])->name('collaboration_add');
Route::put('/collaboration/update/{id}', [AdminHomeController::class, 'collaboration_update'])->name('collaboration_update');
Route::delete('/collaboration/delete/{id}', [AdminHomeController::class, 'collaboration_delete'])->name('collaboration_delete');


Route::put('/admin-home/company-update/{id}', [AdminHomeController::class, 'company_details_update'])->name('company_details_update');


Route::post('/admin-home/category-add', [AdminHomeController::class, 'sports_category_add'])->name('sports_category_add');
Route::put('/sports-category/update/{id}', [AdminHomeController::class, 'sports_category_update'])->name('sports_category_update');
Route::delete('/sports-category/delete/{id}', [AdminHomeController::class, 'sports_category_delete'])->name('sports_category_delete');


Route::post('/admin-home/information-add', [AdminHomeController::class, 'sports_information_add'])->name('sports_information_add');
Route::put('/sports-information/update/{id}', [AdminHomeController::class, 'sports_information_update'])->name('sports_information_update');
Route::delete('/sports/information/delete/{id}', [AdminHomeController::class, 'sports_information_delete'])->name('sports_information_delete');

// pdf converter route ==================================>
Route::get('/download-pdf/{id}', [PdfController::class, 'pdf_create'])->name('pdf_create');








// Admin ABOUT All API Routes ========================================================================================================================================>

Route::get('/admin-about', [AdminAboutController::class, 'all_banners_get'])->name('admin-about');


Route::post('/admin/banners', [AdminAboutController::class, 'all_banners_add'])->name('all_banners_add');
Route::put('/admin/banners/{id}', [AdminAboutController::class, 'all_banners_update'])->name('all_banners_update');
Route::delete('/admin/banners/{id}', [AdminAboutController::class, 'all_banners_delete'])->name('all_banners_delete');


Route::post('/admin-home/who-add', [AdminAboutController::class, 'all_who_add'])->name('all_who_add');
Route::put('/who/information/update/{id}', [AdminAboutController::class, 'all_who_update'])->name('all_who_update');
Route::delete('/who/information/delete/{id}', [AdminAboutController::class, 'all_who_delete'])->name('all_who_delete');


Route::post('/admin-home/mission-add', [AdminAboutController::class, 'all_mission_add'])->name('all_mission_add');
Route::put('/mission/information/update/{id}', [AdminAboutController::class, 'all_mission_update'])->name('all_mission_update');
Route::delete('/mission/information/delete/{id}', [AdminAboutController::class, 'all_mission_delete'])->name('all_mission_delete');


Route::post('/admin-home/vision-add', [AdminAboutController::class, 'all_vision_add'])->name('all_vision_add');
Route::put('/vision/information/update/{id}', [AdminAboutController::class, 'all_vision_update'])->name('all_vision_update');
Route::delete('/vision/information/delete/{id}', [AdminAboutController::class, 'all_vision_delete'])->name('all_vision_delete');


Route::post('/admin-home/clubethics-add', [AdminAboutController::class, 'all_clubEthics_add'])->name('all_clubEthics_add');
Route::put('/clubethics/information/update/{id}', [AdminAboutController::class, 'all_clubEthics_update'])->name('all_clubEthics_update');
Route::delete('/clubethics/information/delete/{id}', [AdminAboutController::class, 'all_clubEthics_delete'])->name('all_clubEthics_delete');


Route::post('/admin-home/playerthics-add', [AdminAboutController::class, 'all_playerEthics_add'])->name('all_playerEthics_add');
Route::put('/playerthics/information/update/{id}', [AdminAboutController::class, 'all_playerEthics_update'])->name('all_playerEthics_update');
Route::delete('/playerthics/information/delete/{id}', [AdminAboutController::class, 'all_playerEthics_delete'])->name('all_playerEthics_delete');


Route::post('/admin-home/founder-add', [AdminAboutController::class, 'all_founder_add'])->name('all_founder_add');
Route::put('/founder/information/update/{id}', [AdminAboutController::class, 'all_founder_update'])->name('all_founder_update');
Route::delete('/founder/information/delete/{id}', [AdminAboutController::class, 'all_founder_delete'])->name('all_founder_delete');









// Admin NORMAL SESSION All API Routes ========================================================================================================================================>
Route::get('/admin-normal-session', [AdminNormalSessionController::class, 'all_normalSession_get'])->name('admin-normal-session');


Route::post('/normalsession-add', [AdminNormalSessionController::class, 'all_normalSession_add'])->name('all_normalSession_add');
Route::put('/normalsession/update/{id}', [AdminNormalSessionController::class, 'all_normalSession_update'])->name('all_normalSession_update');
Route::delete('/normalsession/delete/{id}', [AdminNormalSessionController::class, 'all_normalSession_delete'])->name('all_normalSession_delete');










// Admin OPTIONAL SESSION All API Routes ========================================================================================================================================>
Route::get('/admin-optional-session', [AdminOptionalSessionController::class, 'all_optionalSession_get'])->name('admin-optional-session');


Route::post('/optionalsession-add', [AdminOptionalSessionController::class, 'all_optionalSession_add'])->name('all_optionalSession_add');
Route::put('/optionalsession/update/{id}', [AdminOptionalSessionController::class, 'all_optionalSession_update'])->name('all_optionalSession_update');
Route::delete('/optionalsession/delete/{id}', [AdminOptionalSessionController::class, 'all_optionalSession_delete'])->name('all_optionalSession_delete');














// Admin TOURNAMENTS All API Routes ========================================================================================================================================>
Route::get('/admin-tournament', [AdminTournamentsCategoryController::class, 'all_tournaments_get'])->name('admin-tournament');


Route::post('/tournaments-category-add', [AdminTournamentsCategoryController::class, 'tournaments_category_add'])->name('tournaments_category_add');
Route::put('/tournaments-category/update/{id}', [AdminTournamentsCategoryController::class, 'tournaments_category_update'])->name('tournaments_category_update');
Route::delete('/tournaments-category/delete/{id}', [AdminTournamentsCategoryController::class, 'tournaments_category_delete'])->name('tournaments_category_delete');


Route::post('/tournaments-team-add', [AdminTournamentsCategoryController::class, 'tournaments_team_add'])->name('tournaments_team_add');
Route::put('/tournaments-team/update/{id}', [AdminTournamentsCategoryController::class, 'tournaments_team_update'])->name('tournaments_team_update');
Route::delete('/tournaments-team/delete/{id}', [AdminTournamentsCategoryController::class, 'tournaments_team_delete'])->name('tournaments_team_delete');


Route::post('/tournaments-details-add', [AdminTournamentsCategoryController::class, 'all_tournamentDestails_add'])->name('all_tournamentDestails_add');
Route::put('/tournaments-details/update/{id}', [AdminTournamentsCategoryController::class, 'all_tournamentDestails_update'])->name('all_tournamentDestails_update');
Route::delete('/tournaments-details/delete/{id}', [AdminTournamentsCategoryController::class, 'all_tournamentDestails_delete'])->name('all_tournamentDestails_delete');
















// Admin GALLERY All API Routes ========================================================================================================================================>
Route::get('/admin-gallery', [AdminGalleryController::class, 'all_gallery_get'])->name('admin-gallery');


Route::post('/gallery-add', [AdminGalleryController::class, 'all_galleryImage_add'])->name('all_galleryImage_add');
Route::put('/gallery/update/{id}', [AdminGalleryController::class, 'all_galleryImage_update'])->name('all_galleryImage_update');
Route::delete('/gallery/delete/{id}', [AdminGalleryController::class, 'all_galleryImage_delete'])->name('all_galleryImage_delete');


















// Admin Contact Support All API Routes ========================================================================================================================================>
Route::get('/admin-support', [AdminContactSupportController::class, 'all_contactSupport_get'])->name('admin-support');


Route::post('/support-add', [AdminContactSupportController::class, 'all_contactSupport_add'])->name('all_contactSupport_add');
Route::delete('/support/delete/{id}', [AdminContactSupportController::class, 'all_contactSupport_delete'])->name('all_contactSupport_delete');

















// Admin RSPL STORE Product Listing All API Routes ========================================================================================================================================>
Route::get('/admin-store', [AdminRSPLstoreController::class, 'all_products_get'])->name('admin-store');

Route::post('/product-add', [AdminRSPLstoreController::class, 'products_add'])->name('products_add');
Route::put('/product/update/{id}', [AdminRSPLstoreController::class, 'products_update'])->name('products_update');
Route::delete('/product/delete/{id}', [AdminRSPLstoreController::class, 'products_delete'])->name('products_delete');
















// Admin ADMISSSION LIST All API Routes ========================================================================================================================================>
Route::get('/admin-admission', [AdminAdmissionFormController::class, 'all_form_get'])->name('admin-admission');

Route::put('/student/update/{id}', [AdminAdmissionFormController::class, 'all_form_update'])->name('all_form_update');
Route::delete('/download/{id}', [AdminAdmissionFormController::class, 'form_download'])->name('form_download');

Route::get('/document/download/{type}/{id}', [AdminAdmissionFormController::class, 'downloadDocument'])->name('document.download');















// Admin SEO API Routes ========================================================================================================================================>
Route::get('/admin-seoo', [SEOController::class, 'get_seo_data'])->name('admin-seoo');
