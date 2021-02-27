<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\User;
use App\Model\Likable;

class Post extends Model
{
		protected $table = 'post';
		public $primaryKey = 'id';
		public $timestamp = true;
		protected $fillable = ['regno','image','post_description','post_img','created_at']; 

		public function user(){
			return $this->belongsto('App\Model\User','user_id');
			}
		 // public function like(){
			// return $this->belongsto('App\Model\Likable','user_id');
			// }
}