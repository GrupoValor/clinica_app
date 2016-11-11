<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class TaCiclo extends Eloquent
{
	protected $table = 'TA_CICLO';
	protected $primaryKey = 'cic_id';
	public $timestamps = false;

	protected $casts = [
		'cic_fechaini' => 'date',
		'cic_fechafin' => 'date',
		'cic_semanas' => 'int',
		'cln_id' => 'int'		
	];

	protected $fillable = [
		'cic_nombre',
		'cic_fechaini',
		'cic_fechafin',
		'cic_semanas',
		'cln_id'
	];
}
