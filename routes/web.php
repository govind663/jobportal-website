<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\JobPortalController;

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\NewsletterController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostCRUDController;

use App\Http\Controllers\FileUploadController;


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


Route::get('/', [JobPortalController::class, 'Home'])->name('/');
Route::get('/about', [JobPortalController::class, 'About'])->name('/about');

Route::get('/job-page', [JobPortalController::class, 'Job_Page'])->name('/job-page');
Route::get('/job-details', [JobPortalController::class, 'Job_Details'])->name('/job-details');

Route::get('/resume', [JobPortalController::class, 'Resume'])->name('/resume');
Route::get('/privacy-policy', [JobPortalController::class, 'Privacy_Policy'])->name('/privacy-policy');

Route::get('/faq', [JobPortalController::class, 'FAQ'])->name('/faq');
Route::get('/pricing', [JobPortalController::class, 'Pricing'])->name('/pricing');

Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('/browse-jobs', [JobPortalController::class, 'Browse_Jobs'])->name('/browse-jobs');
Route::get('/browse-categories', [JobPortalController::class, 'Browse_Categories'])->name('/browse_categories');

Route::get('/add-resume', [JobPortalController::class, 'Add_Resume'])->name('/add-resume');
Route::get('/edit-resume', [JobPortalController::class, 'Edit_Resume'])->name('/edit-resume');

Route::get('/manage-resumes', [JobPortalController::class, 'Manage_Resumes'])->name('/manage-mesumes');

Route::get('/job-alerts', [JobPortalController::class, 'Job_Alerts'])->name('/job-alerts');
Route::get('/post-jobs', [JobPortalController::class, 'Post_Jobs'])->name('/post-jobs');

Route::get('/manage-jobs', [JobPortalController::class, 'Manage_Jobs'])->name('/manage-jobs');
Route::get('/manage-applications', [JobPortalController::class, 'Manage_Applications'])->name('/manage-applications');

Route::get('/browse-resumes', [JobPortalController::class, 'Browse_Resumes'])->name('/browse-resumes');
Route::get('/blog', [JobPortalController::class, 'Blog'])->name('blog');

Route::get('/blog-left-sidebar', [JobPortalController::class, 'Blog_Left_Sidebar'])->name('/blog-left-sidebar');
Route::get('/blog-full-width', [JobPortalController::class, 'Blog_Full_Width'])->name('/blog-full-width');

Route::get('/single-post', [JobPortalController::class, 'Single_Post'])->name('/single-post');
Route::get('/my-account', [JobPortalController::class, 'My_Account'])->name('/my-account');

Route::get('/bookmarked', [JobPortalController::class, 'Bookmarked'])->name('/bookmarked');
Route::get('/change-password', [JobPortalController::class, 'Change_Password'])->name('/change-password');

Route::get('/notifications', [JobPortalController::class, 'Notifications'])->name('/notifications');
Route::get('/Job-Fair', [JobPortalController::class, 'Job_Fair'])->name('/Job-Fair');

Route::get('/Job-Seeker', [JobPortalController::class, 'Job_Seeker'])->name('/Job-Seeker');
Route::get('/Institute', [JobPortalController::class, 'Institute'])->name('/Institute');

Route::get('/Consultancy', [JobPortalController::class, 'Consultancy'])->name('/Consultancy');
Route::get('/Companies', [JobPortalController::class, 'Companies'])->name('/Companies');

Route::get('/Training', [JobPortalController::class, 'Training'])->name('/Training');
Route::get('/upload-file', [JobPortalController::class, 'Job_Application'])->name('/upload-file');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


Route::get('newsletter', [NewsletterController::class, 'create'])->name('newsletter');
Route::post('newsletter', [NewsletterController::class, 'store'])->name('newsletter');

Route::resource('products', ProductController::class);
Route::resource('posts', PostCRUDController::class);

Route::get('/upload-file', [FileUploadController::class, 'createForm']);
Route::post('/upload-file', [FileUploadController::class, 'fileUpload'])->name('fileUpload');


