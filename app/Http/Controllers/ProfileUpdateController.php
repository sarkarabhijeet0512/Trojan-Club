<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\LatestNews;
use App\Model\Post;
use App\Model\Registration;
use App\Model\Likable;
use Auth;
use DB;
use App\Model\User;
use Image;
use App\Helpers\helpers;
use App\Model\Comments;

class ProfileUpdateController extends Controller
{
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function saveProfile(Request $request){
        $profile = Auth::user();
        $profile->first_name = $request->fname;
        $profile->middle_name = $request->mname;
        $profile->last_name = $request->lname;
        $profile->email = $request->email;
        $profile->phoneno = $request->phone;
        $profile->status = $request->status;
        $profile->branch = $request->branch;
        $profile->batch = $request->batch;
        $profile->experience = $request->exp;
        $profile->organisation = $request->org;
        $profile->designation = $request->designation;
        $profile->per_house = $request->phouse;
        $profile->per_street = $request->pstreet;
        $profile->per_city = $request->pcity;
        $profile->per_state = $request->pstate;
        $profile->per_country = $request->pcountry;
        $profile->per_pin = $request->ppin;
        $profile->temp_house = $request->house;
        $profile->temp_street = $request->street;
        $profile->temp_city = $request->city;
        $profile->temp_state = $request->state;
        $profile->temp_country = $request->country;
        $profile->temp_pin = $request->pin;
        // $profile->image = $request->;
        // $profile->facebook = $request->;
        // $profile->twitter = $request->;
        // $profile->instagram = $request->;
        // $profile->linkedin = $request->;
        // $profile->website = $request->;
        $profile->update();
        return redirect()->back()->with(['status' => 'Profile updated successfully.']);
     }
     public function updateProfile(Request $request){
            if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = 'storage/profile/' . Auth::user()->regno . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path($filename ) );
            $user = Auth::user();
            $user->image = $filename;
            $user->update();
            return redirect()->back()->with(['status' => 'Profile picture updated successfully.']);
        }
    }
}