<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    	protected $table = 'slider';
		public $primaryKey = 'id';
		public $timestamp = true;
		protected $fillable = ['color','heading','description','is_active','image'];
}
