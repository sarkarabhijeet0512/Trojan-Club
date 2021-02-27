<?php 

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
		protected $table = 'events';
		public $primaryKey = 'id';
		public $timestamp = true;
		protected $fillable = ['event_title','description','event_date','image','is_active']; 
		
}
?>