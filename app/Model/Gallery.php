<?php 

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\User;


class Gallery extends Model
{
		protected $table = 'gallery';
		public $primaryKey = 'id';
		public $timestamp = true;
		protected $fillable = ['event','storage_location','thumbnail_location','description','is_active'];

}
?>