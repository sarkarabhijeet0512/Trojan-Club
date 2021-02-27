<?php 
namespace App\Helpers;

use App\Model\Likable;
use App\Model\Follow;
use Auth;

class helpers 
{
	// *********************************LIKE data************************************
	 public static function dislike($post_id){       
        $liked=Likable::where(['user_id'=>Auth::user()->regno, 'post_id' =>$post_id ,'is_liked'=>'like' ])->get();

        if (count($liked)!= 0) {
          	return true;
        }else{
          	return false;
        }
    }
    public static function getLikes($post_id){
		  $count = Likable::where(['post_id'=>$post_id, 'is_liked'=>'like'])->get();
		  $result = $count->count();
		  return $result;
		
		}

	public static function getRating($post_id){
	  $rating = array();
	  $count = Likable::where(['post_id'=>$post_id, 'is_liked'=>'like'])->get();
		  $result = $count->count();
	  $rating = [
	  	'likes' => $result,
	  	// 'dislikes' => $dislikes[0]
	  ];
	  return json_encode($rating);
	}
	// *****************************Follow data***************************
	public static function follow($id){       
        $follow=Follow::where(['user_id'=>Auth::user()->regno ,'following_id'=>$id,'follow'=>'follow' ])->get();

        if (count($follow)!= 0) {
          	return true;
        }else{
          	return false;
        }
    }
    public static function getFollows($id){
		  $count = Follow::where(['following_id'=>$id, 'follow'=>'follow'])->get();
		  $result = $count->count();
		  return $result;
		
		}
	public static function followRating($id){
	  $rating = array();
	  $count = Follow::where(['following_id'=>$id, 'follow'=>'follow'])->get();
		  $result = $count->count();
	  $rating = [
	  	'follow' => $result,
	  	// 'dislikes' => $dislikes[0]
	  ];
	  return json_encode($rating);
	}
}
