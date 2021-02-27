<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\LatestNews;
use App\Model\Post;
use App\Model\Registration;
use App\Model\Likable;
use Auth;
use App\Model\User;
use Image;
use App\Helpers\helpers;
use App\Model\Comments;
use App\Model\Follow;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['about', 'programs']]);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function user()
    {
        return view('user');
    }
    public function index(Request $request)
    {
        $latest_news = LatestNews::where('status',0)->get();
        $random_post = User::inRandomOrder()->get();
        $count = Follow::where(['user_id'=>Auth::user()
                        ->regno,'follow'=>'follow'])
                        ->get();
        $arr=[];
        foreach ($count as $c) {
        $f = $c->following_id;
        array_push($arr, $f);
        }

        $following = $count->count();

        $suggestions = user::whereNotIn('id', $arr)
                        ->orderby('created_at','desc')
                        ->take(10)
                        ->get();

        $posts = Post::where(['is_active'=>1])
                    ->with('user:id,first_name,middle_name,last_name,regno,image')
                    ->orderby('post.created_at','desc')
                    ->paginate(4);

        if ($request->ajax()) {
        $view = view('main_page_posts',compact('posts'))
                    ->render();
                    return response()
                    ->json(['html'=>$view]);
        }
        $commentByid = Comments::where(['is_active'=>1,'post_id'=>$request->post_id])
                        ->with('user:id,first_name,middle_name,last_name,regno,image')
                        ->get();

        return view('home', compact('random_post','posts','latest_news','following','commentByid','suggestions','count'));
    }
    public function view_profile(Request $request){
         $user = Post::where(['post.is_active'=>1,'user_id'=>$request->id])
                        ->with('user')
                        ->orderby('post.created_at','desc')
                        ->first();
         $posts = Post::where(['post.is_active'=>1,'user_id'=>$request->id])
                        ->with('user')
                        ->orderby('post.created_at','desc')
                        ->paginate(3);
        if ($request->ajax()) {
            $view = view('data',compact('posts'))->render();
            return response()->json(['html'=>$view]);
        }
        return view ('view_profile',compact('posts','user'));
    }
    public function getComment(Request $request){

        if ($request->ajax()) {
           $commentByid = Comments::where(['is_active'=>1,'post_id'=>$request->post_id])
                                    ->with('user:id,first_name,middle_name,last_name,regno,image')
                                    ->get();
                                    
           return json_encode(array('data'=>$commentByid));
           return view('home', compact('commentByid'));
        }

    }

}