<?php 

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\User;


class Comments extends Model
{
		protected $table = 'comments';
		public $primaryKey = 'id';
		public $timestamp = true;
		protected $fillable = ['post_id','user_id','comment','is_active'];

		public function user(){
			return $this->belongsto('App\Model\User','user_id');
			}

}
?>