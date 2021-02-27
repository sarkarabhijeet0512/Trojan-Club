<?php

use Illuminate\Support\Facades\Route;

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

// MAIN PAGE
Route::get('/', 'MainpageController@Homepage')->name('Homepage');
Route::get('/about', 'MainpageController@about')->name('about');
Route::get('/programs', 'MainpageController@programs')->name('programs');
Route::get('/gallery', 'MainpageController@gallery')->name('gallery');
Route::get('/event-single/{id}','MainpageController@event-single')->name('event-single');
Route::get('/contactus','MainpageController@contactus')->name('contactus');
Route::get('/Eventregister{id}','MainpageController@Eventregister')->name('Eventregister');
Route::Post('/Event_register','MainpageController@Event_register')->name('Event_register');
route::Post('/feedback','MainpageController@feedback')->name('feedback');

Auth::routes();
// ALUMINI PANNEL
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'HomeController@user')->name('user');
Route::get('/user_profile', 'PublicFeedController@user_profile_Feeds')->name('user_profile');
Route::get('/{id}', 'HomeController@view_profile')->name('view_profile');
Route::Post('/follow', 'FollowController@followingData')->name('follow');
Route::Post('/data/save', 'ProfileUpdateController@saveProfile')->name('user.save');
Route::Post('/feeds', 'PublicFeedController@feeds')->name('feeds');
Route::Post('/profile', 'ProfileUpdateController@updateProfile')->name('profile');
Route::Post('/like', 'LikeController@updatelike')->name('like');
Route::Post('/comments', 'CommentController@postComments')->name('comments');
Route::get('/getcomment/{post_id}', 'HomeController@getComment');
// ADMIN
Route::get('/admin/index', 'AdminController@adminIndex')->name('AdminIndex');
// GALLERY
Route::get('/admin/galleryUpload', 'AdminController@galleryUpload')->name('galleryUpload');
Route::Post('/admin/gallery','AdminController@galleryStore')->name('galleryStore');
Route::get('/admin/viewgallery','AdminController@viewgallery')->name('viewgallery');
// SLIDER
Route::get('/admin/slider','AdminController@Slider')->name('Slider');
Route::Post('/admin/updateslider', 'AdminController@updateSlider')->name('updateSlider');
Route::get('/admin/viewAllSlider', 'AdminController@viewAllSlider')->name('viewAllSlider');
Route::get('admin/deleteSlider{id}','AdminController@deleteSlider')->name('deleteSlider');
// TABLES COMMENTS
Route::get('/admin/tables', 'AdminController@CommentsList')->name('tables');
Route::get('/admin/comment/delete{id}', 'AdminController@CommentDelete')->name('CommentDelete');
Route::Post('/admin/disableComments', 'AdminController@disableComments')->name('CommentDisable');
Route::get('/admin/disabledcomments', 'AdminController@DisabledComments');
// EVENTS
Route::get('/admin/events', 'AdminController@events')->name('events');
Route::Post('/admin/createEvent', 'AdminController@CreateEvents')->name('createEvent');
Route::get('/admin/all_events', 'AdminController@showallEvents')->name('all_events');
Route::get('/admin/delete_events/{id}','AdminController@deleteEvents')->name('deleteEvents');
Route::Post('/admin/disableEvents','AdminController@disableEvents')->name('disableEvents');
// NEWS
Route::get('/admin/news', 'AdminController@news')->name('news');
Route::get('/admin/allnews', 'AdminController@allnews')->name('allnews');
Route::Post('/admin/createNews', 'AdminController@createNews')->name('createNews');
Route::get('/admin/deleteNews/{id}', 'AdminController@deleteNews')->name('deleteNews');
// USERS
Route::get('/admin/users', 'AdminController@allUsers')->name('allUsers');
Route::Post('/admin/disableUsers', 'AdminController@disableUsers')->name('disable');
Route::get('/admin/disabledUsers', 'AdminController@disabledUsers')->name('disabledUsers');
Route::Post('/admin/enableUsers', 'AdminController@enableUsers')->name('enableUsers');
Route::get('/admin/deleteUsers','AdminController@deleteUsers')->name('deleteUsers');
// SEARCH
Route::get('/admin/autocomplete', 'AdminController@autocomplete')->name('autocomplete');
Route::get('/admin/search', 'AdminController@search')->name('search');
//FEEDBACK
Route::get('/admin/feedback', 'AdminController@feedback')->name('admin.feedback');

