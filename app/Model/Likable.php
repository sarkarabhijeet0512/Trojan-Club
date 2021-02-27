<?php 

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Post;

class Likable extends Model
{
		protected $table = 'likes';
		public $primaryKey = 'id';
		public $timestamp = true;
		protected $fillable = ['post_id','user_id','liked']; 
}
?>