<?php

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


//
Auth::routes();

Route::get('/','Auth\LoginController@showLoginForm');
Route::get('dashboard','AdminController@index');
Route::get('doctor-logs','AdminController@doctorLogs');
Route::get('patient-logs','AdminController@patientLogs');
Route::get('pharmacist-logs','AdminController@pharmacistLogs');
Route::get('doctor-specialisation','AdminController@doctorSpecialisation');
Route::post('addSpecialisation','AdminController@addSpecialisation');
Route::get('delete-specialisation/{id}','AdminController@deleteSpecialisation');
Route::post('add-doctor','AdminController@addDoctor');
Route::get('new-doctors','AdminController@newDoctors');
Route::get('manage-doctors','AdminController@manageDoctors');
Route::get('add-pharmacist','AdminController@addPharmacist');
Route::get('manage-pharmacist','AdminController@managePharmacist');
Route::get('delete-doctor/{user}','AdminController@deleteDoctor');
Route::get('delete-pharmacy/{user}','AdminController@managePharmacist');
Route::get('doctor-dashboard','AdminController@patientDashboard');


//Pharmacist
Route::get('pharmacist-dashboard','PharmacistController@dashboard');
Route::get('new-drug','PharmacistController@newDrug');
Route::post('addDrug','PharmacistController@addDrug');
Route::get('delete-drug/{id}','PharmacistController@deleteDrug');
Route::get('manage-drug','PharmacistController@manageDrug');
Route::get('new-prescriptions','PharmacistController@newPrescriptions');
Route::get('old-prescriptions','PharmacistController@oldPrescriptions');

//Patients
Route::get('patient-dashboard','PatientController@index');
Route::get('new-consultation','PatientController@newConsultation');
Route::get('appointment/{user}/{address}','PatientController@doctorInfo');
Route::post('new-appointment','PatientController@newAppointment');


//Doctors
Route::get('add-patient','DoctorController@addPatient');
Route::get('manage-patient/{user?}','DoctorController@managePatient');
Route::get('new-requests/{id?}','DoctorController@newRequests');
Route::get('delete-request/{id}','DoctorController@newRequests');
Route::get('old-requests','DoctorController@oldrequests');
Route::get('prescribe/{id?}','DoctorController@prescribe');
Route::post('new-prescription','DoctorController@newPrescription');
Route::get('sendPdf/{id}','DoctorController@sendPdf');




