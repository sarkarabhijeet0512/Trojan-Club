<?php 

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LatestNews extends Model
{
		protected $table = 'latest_news';
		public $primaryKey = 'id';
		public $timestamp = true;
		protected $fillable = ['news','status']; 
}
?>