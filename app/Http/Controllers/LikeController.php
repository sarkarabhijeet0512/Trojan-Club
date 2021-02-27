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

class LikeController extends Controller
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


    public function updatelike(Request $request){
       if($request->action == 'like'){
            $like = new Likable();
            $like->post_id = $request->post_id;
            $like->user_id = Auth::user()->regno;
            $like->is_liked = $request->action;
            $like->save();
            echo helpers::getRating($request->post_id);
            }
        if ($request->action == 'unlike') {
            $res=Likable::where(['post_id' => $request->post_id, 'user_id' => Auth::user()->regno])->delete();
            echo helpers::getRating($request->post_id);
        }
    }
} 