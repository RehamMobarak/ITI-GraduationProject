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



Auth::routes();
Route::get('/',function(){
    return view('index');
});
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Auth::routes();
//privacy
Route::get('/privacy',function()
{
    return view('privacy');
});
//terms of use
Route::get('/terms',function()
{
    return view('terms');
});

//profiles
Route::get('/profile','ProfileController@index')->name('profiles.index')->middleware('auth');
//Route::get('/profile/{profile}/edit','ProfileController@edit')->name('profiles.edit');
Route::get('/profile/edit','ProfileController@edit')->name('profiles.edit')->middleware('auth');
Route::patch("/profile/update",'ProfileController@update')->name('profiles.update')->middleware('auth');


//category-content
Route::get('/contents/{cat_id}','ContentController@index')->name('contents.index')->middleware('auth');
Route::get('/categories/{career_id}','CategoryController@index')->name('categories.index')->middleware('auth');
Route::get('/contents/{content}/view','ContentController@view')->name('contents.view')->middleware('auth');

//search

//Route::get('autocomplete', 'HomeController@search');
//Route::get('search','HomeController@result');


//about
Route::get('/about',function(){
    return view('about');
});


//mindmaps
Route::get('/mindmaps',function(){
    return view('mindmaps');
});

//login with anotheer providers
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


//faq
Route::get('/faq',function(){
    return view('frequent');
});

//contactus
Route::get('/contactus',function(){
    return view('contact');
})->name('contactus');
Route::post('/contactus','MessageController@create');




//autocomplete  
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'HomeController@autocomplete'));


                                          ////////////
                                         //  ADMIN //
                                        ////////////
Route::group(['middleware' => ['auth']], function () {
//control career//
Route::get('/control', 'CareerController@index')->name('control');
Route::get('/control/add','CareerController@add')->name('control.Add');
//add
Route::post('/add-career','CareerController@storeCareer')->name("addcareer");
Route::post('/add-career/category','CareerController@storeCategory');
Route::post('/add-career/content','CareerController@storeContent');
//assign
Route::post('/add-career/assign_career_category', 'CareerController@AssignCareerCategory')->name('assign.category');
Route::post('/add-career/assign_category_content', 'CareerController@AssignCategoryContent')->name('assign.content');
//modification main tables
Route::get('/Edit', 'CareerController@edit')->name('edit');
Route::get('/Modify', 'CareerController@ModifyMainTables')->name('ModifyMain');
Route::post('/Modify/career', 'CareerController@ModifyCareer')->name('ModifyCareer');
Route::post('/Modify/category', 'CategoryController@ModifyCategory')->name('ModifyCategory');
Route::post('/Modify/content', 'ContentController@ModifyContent')->name('ModifyContent');
Route::get('/Modify/relationship', 'CareerController@ModifyRelationshipTables')->name('ModifyRelationship');
//modify career assignments
Route::get('/modify-career-categories','CareerController@deleteCategoryIndex');
Route::get('/modify-career-categories/{careerId}','CareerController@deleteCategoryRelation')->name('AssignedCategory');
Route::get('/deleteCareerCategory/{categoryId}','CareerController@deleteCareerCategory');

//modify category assignments
Route::get('/modify-category-contents','CategoryController@deleteContentIndex');
Route::get('/modify-category-contents/{rowId}','CategoryController@deleteContentRelation')->name('AssignedContent');
Route::get('/deleteCategoryContent/{rowId}','CategoryController@deleteCategoryContent');



//delete from main tables
Route::get('/delete',function()
{
    return view('admin.control.delete.index');
});

Route::get('/delete/career','CareerController@DeleteIndex');
Route::get('/delete/category','CategoryController@DeleteIndex');
Route::get('/delete/content','ContentController@DeleteIndex');

Route::get('/delete/career/{career_id}','CareerController@delete');
Route::get('/delete/category/{category_id}','CategoryController@delete');
Route::get('/delete/content/{content_id}','ContentController@delete');




//view messages
Route::get('/viewmessages', 'MessageController@index')->name('view_messages');
Route::get('/viewmessages/{msg}', 'MessageController@show')->name('msgs.show');
Route::get('/deletemessages/{msg}', 'MessageController@delete')->name('msgs.delete');

//relpy messages
Route::get('/reply/{msg}', 'MessageController@reply')->name('reply');
Route::post('/reply/{msg}', 'MessageController@sendMail')->name('sendMail');

//charts
Route::get('/charts', 'ChartsController@index');
});





