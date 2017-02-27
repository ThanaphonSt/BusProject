<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model 
{
	protected $table = 'Position';
	protected $primaryKey = 'Position_id';

	// public function scopeOfPosition($query, $position_latitude)
 //    {
 //        return $query->where('Position', $position_latitude);
 //    }

}
