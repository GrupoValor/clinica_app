<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class TaPeriodo extends Eloquent
{
	protected $table = 'TA_PERIODO';
	protected $primaryKey = 'per_id';
	public $timestamps = false;

	protected $casts = [
		'per_sumapesos' => 'int',
		'per_semanas' => 'int',
		'per_fechaini' => 'date',
		'per_fechafin' => 'date',
		'cur_id' => 'int',
		'cic_id' => 'int',
		'cln_id' => 'int'
	];

	protected $fillable = [
		'per_sumapesos',
		'per_semanas',
		'per_fechaini',
		'per_fechafin',
		'cur_id',
		'cic_id',
		'cln_id'
	];
}
