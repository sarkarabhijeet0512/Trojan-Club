<?php 

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Feedback extends Model
{
		protected $table = 'feedback';
		public $primaryKey = 'id';
		public $timestamp = true;
		protected $fillable = ['name','email','phone','message'];

}
?>