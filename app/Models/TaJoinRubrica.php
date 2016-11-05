<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class TaJoinRubrica extends Eloquent
{
	protected $table = 'ta_join_rubrica';
	public $timestamps = false;

	protected $casts = [
		'rba_id' => 'int',
		'cur_id' => 'int',
		'cic_id' => 'int'		
	];

	protected $fillable = [
		'rba_id',
		'cur_id',
		'cic_id'
	];
}
