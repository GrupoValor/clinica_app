<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class TaRubrica extends Eloquent
{
	protected $table = 'TA_RUBRICA';
	protected $primaryKey = 'rba_id';
	public $timestamps = false;

	protected $casts = [
		'rba_peso' => 'int',
		'rba_maxpunt' => 'int',
		'per_id' => 'int',
		'cln_id' => 'int'
	];

	protected $fillable = [
		'rba_nombre',
		'rba_peso',
		'rba_maxpunt',
		'per_id',
		'cln_id'
	];
}
