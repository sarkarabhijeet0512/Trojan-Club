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
use App\Model\Follow;

class FollowController extends Controller
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
    public function followingData(Request $request){
       if($request->action == 'follow'){
            $follow = new Follow();
            $follow->user_id = Auth::user()->regno;
            $follow->follow = $request->action;
            $follow->following_id = $request->following_id;
            $follow->is_active = 1;
            $follow->save();
            // return response($follow); 
            echo helpers::followRating($request->following_id);
            }
        if ($request->action == 'unfollow') {
            $res=Follow::where(['following_id'=>$request->following_id ,'user_id' => Auth::user()->regno])->delete();
            echo helpers::followRating($request->following_id);
        }

	}

}
?>