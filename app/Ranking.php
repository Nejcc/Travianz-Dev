<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
	/**
	 * The table associated with the model
	 *
	 * @var string
	 */
	protected $table = 'ranking';
	
	/**
	 * The attributes that aren't mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = [];
	
	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var bool
	 */
	public $timestamps = false;
}