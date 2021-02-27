<?php 

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
		protected $table = 'following';
		public $primaryKey = 'id';
		public $timestamp = true;
		protected $fillable = ['user_id','follow','following_id','is_active']; 
		public function user(){
			return $this->belongsto('App\Model\User','user_id');
			}
}
?>