<?php 

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Eventregister extends Model
{
		protected $table = 'event_register';
		public $primaryKey = 'id';
		public $timestamp = true;
		protected $fillable = ['first_name','last_name','email','branch','event_name','contact_no','college_name'];

}
?>