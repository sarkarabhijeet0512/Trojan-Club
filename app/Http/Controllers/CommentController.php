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

class CommentController extends Controller
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

    public function postComments(Request $request){
        
        if ($request->ajax()) {
            $comment = new Comments();
            $comment->post_id = $request->post_id;
            $comment->user_id = $request->user_id;
            $comment->comment = $request->comment;
            $comment->save();
             return response($comment);
        }
    }
    

} 