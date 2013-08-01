<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::when('admin/*', 'auth');

Route::get('/', function()
{
	return View::make('base.index');
});
Route::get('/registration', function()
{
	return View::make('base.registration');
});
Route::get('/login', function()
{
	return View::make('base.login');
});
Route::get('/logout', function()
{
        Auth::logout();
	return View::make('base.login');
});
Route::get('admin/manage-registrations', function()
{
        $registrations = Registration::all();
        $registration_details = Registration_detail::all();
        $data = [
          'registrations' => $registrations,  
          'registration_details' => $registration_details  
        ];
	return View::make('base.manageregistrations', $data);
});
Route::post('admin/approveregistration',function()
{
        $id = Input::get('id');
        $r = Registration::find($id);
        $r->status = "approved";
        $r->save();
        $r_d = Registration_detail::where('registration_no', "=", $id)->get();
        foreach($r_d as $rd){
            $rd->status = "approved";
            $rd->save();
        }
        return Redirect::back();
});
Route::post('/login', function()
{
        if(Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')])){
            return Redirect::to('admin/manage-registrations');
        }
        else{
            return "forbidden access";
        }
});
Route::get('/registration-list', function()
{
        $registrations = Registration::all();
        $data = [
          'registrations' => $registrations  
        ];
    
	return View::make('base.registrationlist', $data);
});
Route::get('/attendee-list', function()
{
        $r_d = Registration_detail::all();
        $data = [
          'r_d' => $r_d  
        ];
	return View::make('base.attendeelist', $data);
});
Route::post('/submitregistration', function()
{
        $r = Registration::create([
           'school' => Input::get('school'),  
           'address' => Input::get('address'),  
           'head_delegate' => Input::get('head_delegate'),  
           'mobile1' => Input::get('mobile1'),  
           'mobile2' => Input::get('mobile2'),  
           'email' => Input::get('email'), 
           'status' => "pending"  
        ]);
        for ($index = 0; $index < count(Input::get("name")); $index++) {
            $rd = Registration_detail::create([
                'registration_no' => $r->id,
                'name' => Input::get('name')[$index],
                'gender' => Input::get('gender')[$index],
                'type' => Input::get('type')[$index],
                'contact' => Input::get('contact')[$index],
                'status' => "pending"
            ]);
        }
	return Redirect::to('/registration-list');
});



Route::resource('registrations', 'RegistrationsController');

Route::resource('registration_details', 'Registration_detailsController');