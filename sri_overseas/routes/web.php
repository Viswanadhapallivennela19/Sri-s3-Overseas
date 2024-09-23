<?php

use App\Http\Controllers\Auth\AuthOtpController;
use App\Http\Controllers\sri_admin_controller;
use App\Http\Controllers\sri_controller;
use Illuminate\Support\Facades\Route;
// User Login For ClientSide
Route::controller(AuthOtpController::class)->group(function(){
    Route::get('otp/login','login')->name('otp_login');
    Route::get('otp/login?generation','otp')->name('otp');
    Route::post('otp/generate','generate')->name('otp_generate');
    Route::get('/otp/verification/{user_id}','verification')->name('otp_verification');
    Route::post('/otp/login','loginWithOtp')->name('otp_get_login');
});
 
Route::get("/",[sri_controller::class,'home'])->name('home');
Route::post("/students_questions",[sri_controller::class,'students_questions'])->name('students_questions');
Route::get('/about',[sri_controller::class,'about'])->name('about');
Route::get('/contact',[sri_controller::class,'contact'])->name('contact');
Route::get('/documents',[sri_controller::class,'documents'])->name('documents');
Route::get('/dream_destination',[sri_controller::class,'dream_destination'])->name('dream_destination');
Route::get('/faq',[sri_controller::class,'faq'])->name('faq');
Route::get('/services',[sri_controller::class,'services'])->name('services');
// Route::get('/sri_overseas',[sri_controller::class,'sri_overseas'])->name('sri_overseas');
Route::get('/success',[sri_controller::class,'success'])->name('success');
Route::get('/universities',[sri_controller::class,'universities'])->name('universities');
// Route::get('/milestones',[sri_controller::class,'milestones'])->name('milestones');
Route::get('/usa',[sri_controller::class,'usa'])->name('usa');
Route::get('/uk',[sri_controller::class,'uk'])->name('uk');
Route::get('/canada',[sri_controller::class,'canada'])->name('canada');
Route::get('/ireland',[sri_controller::class,'ireland'])->name('ireland');
Route::get('/australia',[sri_controller::class,'australia'])->name('australia');
Route::get('/scotland',[sri_controller::class,'scotland'])->name('scotland');
Route::get('/germany',[sri_controller::class,'germany'])->name('germany');
Route::get('/france',[sri_controller::class,'france'])->name('france');
Route::get('/southafrica',[sri_controller::class,'southafrica'])->name('southafrica');
Route::get('/uae',[sri_controller::class,'uae'])->name('uae');
// visa Assistance
Route::get('/visa_assistance',[sri_controller::class,'visa_assistance'])->name('visa_assistance');
// Program Selection
Route::get('/program_selection',[sri_controller::class,'program_selection'])->name('program_selection');
// Contact data insert
Route::post('/data_insert',[sri_controller::class,'contact_data_insert'])->name('contact_data_insert');
//Students Requirement Documents 
Route::post('/documents_insert',[sri_controller::class,'documents_data_insert'])->name('documents_data_insert');

// User Register data insert
Route::get('/User_Registration',[sri_controller::class,'registration'])->name('user_register');
Route::post('/User_data_insert',[sri_controller::class,'user_registration_data_insert'])->name('user_registration_data_insert');
Route::get('/User_logout',[AuthOtpController::class,'user_logout'])->name('user_logout');


// Admin Data
Route::get('/admin',[sri_admin_controller::class,'admin_data'])->name('admin');
// Team Data and Team Data get into the Admin Page
Route::get('/admin_team',[sri_admin_controller::class,'admin_team'])->name('admin_team');
//Team form
Route::get('/team_form',[sri_admin_controller::class,'team_form'])->name('team_form');
//Team data insert into the data base
Route::post('/team_insert',[sri_admin_controller::class,'team_insert'])->name('team_insert');
//Delete Team data
Route::get('/team_delete{id}',[sri_admin_controller::class,'team_delete'])->name('team_delete');


// faq Data and faq Data get into the Admin Page
Route::get('/admin_faq',[sri_admin_controller::class,'admin_faq'])->name('admin_faq');
//faq form
Route::get('/faq_form',[sri_admin_controller::class,'faq_form'])->name('faq_form');
//faq data insert into the data base
Route::post('/faq_insert',[sri_admin_controller::class,'faq_insert'])->name('faq_insert');
//Delete faq data
Route::get('/faq_delete{id}',[sri_admin_controller::class,'faq_delete'])->name('faq_delete');


//Delete student_asked_question data
Route::get('/student_asked_question_delete{id}',[sri_admin_controller::class,'student_asked_question_delete'])->name('student_asked_question_delete');

// // University Data and University Data get into the Admin Page
// Route::get('/admin_University',[sri_admin_controller::class,'admin_university'])->name('admin_university');
// //university form
// Route::get('/university_form',[sri_admin_controller::class,'university_form'])->name('university_form');
// //university data insert into the data base
// Route::post('/university_insert',[sri_admin_controller::class,'university_insert'])->name('university_insert');
// //Delete university data
// Route::get('/university_delete{id}',[sri_admin_controller::class,'university_delete'])->name('university_delete');


// destination Data and destination Data get into the Admin Page
Route::get('/admin_destination',[sri_admin_controller::class,'admin_destination'])->name('admin_destination');
//destination form
Route::get('/destination_form',[sri_admin_controller::class,'destination_form'])->name('destination_form');
//destination data insert into the data base
Route::post('/destination_insert',[sri_admin_controller::class,'destination_insert'])->name('destination_insert');
//Delete destination data
Route::get('/destination_delete{id}',[sri_admin_controller::class,'destination_delete'])->name('destination_delete');

// university Data and university Data get into the Admin Page
Route::get('/university_table',[sri_admin_controller::class,'admin_university'])->name('admin_university');
//university form
Route::get('/milestones_form',[sri_admin_controller::class,'milestones_form'])->name('milestones_form');
//milestones data insert into the data base
Route::post('/milestones_insert',[sri_admin_controller::class,'milestones_insert'])->name('milestones_insert');
//Delete milestones data
Route::get('/milestones_delete{id}',[sri_admin_controller::class,'milestones_delete'])->name('milestones_delete');


//usa form
Route::get('/usa_form',[sri_admin_controller::class,'usa_form'])->name('usa_form');
//usa data insert into the data base
Route::post('/usa_insert',[sri_admin_controller::class,'usa_insert'])->name('usa_insert');
//Delete usa data
Route::get('/usa_delete{id}',[sri_admin_controller::class,'usa_delete'])->name('usa_delete');

//uk form
Route::get('/uk_form',[sri_admin_controller::class,'uk_form'])->name('uk_form');
//uk data insert into the data base
Route::post('/uk_insert',[sri_admin_controller::class,'uk_insert'])->name('uk_insert');
//Delete uk data
Route::get('/uk_delete{id}',[sri_admin_controller::class,'uk_delete'])->name('uk_delete');


//canada form
Route::get('/canada_form',[sri_admin_controller::class,'canada_form'])->name('canada_form');
//canada data insert into the data base
Route::post('/canada_insert',[sri_admin_controller::class,'canada_insert'])->name('canada_insert');
//Delete canada data
Route::get('/canada_delete{id}',[sri_admin_controller::class,'canada_delete'])->name('canada_delete');


//ireland form
Route::get('/ireland_form',[sri_admin_controller::class,'ireland_form'])->name('ireland_form');
//ireland data insert into the data base
Route::post('/ireland_insert',[sri_admin_controller::class,'ireland_insert'])->name('ireland_insert');
//Delete ireland data
Route::get('/ireland_delete{id}',[sri_admin_controller::class,'ireland_delete'])->name('ireland_delete');


//australia form
Route::get('/australia_form',[sri_admin_controller::class,'australia_form'])->name('australia_form');
//australia data insert into the data base
Route::post('/australia_insert',[sri_admin_controller::class,'australia_insert'])->name('australia_insert');
//Delete australia data
Route::get('/australia_delete{id}',[sri_admin_controller::class,'australia_delete'])->name('australia_delete');


//scotland form
Route::get('/scotland_form',[sri_admin_controller::class,'scotland_form'])->name('scotland_form');
//scotland data insert into the data base
Route::post('/scotland_insert',[sri_admin_controller::class,'scotland_insert'])->name('scotland_insert');
//Delete scotland data
Route::get('/scotland_delete{id}',[sri_admin_controller::class,'scotland_delete'])->name('scotland_delete');


//germany form
Route::get('/germany_form',[sri_admin_controller::class,'germany_form'])->name('germany_form');
//germany data insert into the data base
Route::post('/germany_insert',[sri_admin_controller::class,'germany_insert'])->name('germany_insert');
//Delete germany data
Route::get('/germany_delete{id}',[sri_admin_controller::class,'germany_delete'])->name('germany_delete');


//france form
Route::get('/france_form',[sri_admin_controller::class,'france_form'])->name('france_form');
//france data insert into the data base
Route::post('/france_insert',[sri_admin_controller::class,'france_insert'])->name('france_insert');
//Delete france data
Route::get('/france_delete{id}',[sri_admin_controller::class,'france_delete'])->name('france_delete');


//southafrica form
Route::get('/southafrica_form',[sri_admin_controller::class,'southafrica_form'])->name('southafrica_form');
//southafrica data insert into the data base
Route::post('/southafrica_insert',[sri_admin_controller::class,'southafrica_insert'])->name('southafrica_insert');
//Delete southafrica data
Route::get('/southafrica_delete{id}',[sri_admin_controller::class,'southafrica_delete'])->name('southafrica_delete');


//uae form
Route::get('/uae_form',[sri_admin_controller::class,'uae_form'])->name('uae_form');
//uae data insert into the data base
Route::post('/uae_insert',[sri_admin_controller::class,'uae_insert'])->name('uae_insert');
//Delete uae data
Route::get('/uae_delete{id}',[sri_admin_controller::class,'uae_delete'])->name('uae_delete');



// milestones Data and university Data get into the Admin Page
Route::get('/milestones_table',[sri_admin_controller::class,'admin_milestones'])->name('admin_milestones');
//university form
Route::get('/milestones_form',[sri_admin_controller::class,'milestones_form'])->name('milestones_form');
//milestones data insert into the data base
Route::post('/milestones_insert',[sri_admin_controller::class,'milestones_insert'])->name('milestones_insert');
//Delete milestones data
Route::get('/milestones_delete{id}',[sri_admin_controller::class,'milestones_delete'])->name('milestones_delete');

// Student Documents Data
Route::get('/student_documents_data',[sri_admin_controller::class,'student_documents_data_get'])->name('student_documents_data_get');


// contact Data and contact Data get into the Admin Page
Route::get('/admin_contact',[sri_admin_controller::class,'admin_contact'])->name('admin_contact');
 


// admin login routes
Route::get('/AdminLogin',[sri_admin_controller::class,'login'])->name('login');
Route::post('/Login_insert',[sri_admin_controller::class,'login_insert'])->name('login_insert');

// admin registration routes
Route::get('/Admin_registration',[sri_admin_controller::class,'registration'])->name('registration');
Route::post('/registration_insert',[sri_admin_controller::class,'registration_insert'])->name('registration_insert');

// logout
Route::get('/logout',[sri_admin_controller::class,'logout'])->name('logout');


