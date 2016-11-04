<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class TaRubrica extends Eloquent
{
	protected $table = 'ta_rubrica';
	protected $primaryKey = 'rba_id';
	public $timestamps = false;

	protected $casts = [
		'cln_id' => 'int',
		'rba_peso' => 'int',
		'rba_maxpunt' => 'int'
	];

	protected $fillable = [
		'rba_nombre',
		'cln_id',
		'rba_peso',
		'rba_maxpunt'
	];
}
