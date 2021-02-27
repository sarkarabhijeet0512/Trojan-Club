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

class PublicFeedController extends Controller
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


    public function feeds(Request $request){
        // if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = 'storage/publicFeeds/' . time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize('400','200' )->save( public_path($filename ) );
            $feed = new Post();
            $feed->image = $filename;
            // $feed->post_title = $request->title;
            $feed->user_id = $request->id;
            $feed->post_description = $request->description;
            $feed->regno = Auth::user()->regno;
            $feed->post_img = Auth::user()->image;
            $feed->is_active =1;
            $feed->save();
        return redirect()->back()->with(['status' => 'photos And text successfully.']);
    }
    public function user_profile_Feeds(Request $request){
        $posts = Post::where(['post.is_active'=>1,'user_id'=>Auth::user()->id])->with('user')->orderby('post.created_at','desc')->paginate(2);
        if ($request->ajax()) {
            $view = view('data',compact('posts'))->render();
            return response()->json(['html'=>$view]);
        }
        return view ('user_profile',compact('posts'));
    }
}