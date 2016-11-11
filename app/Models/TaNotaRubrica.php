<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class TaNotaRubrica extends Eloquent
{
	protected $table = 'TA_NOTA_RUBRICA';
	protected $primaryKey = 'nra_id';
	public $timestamps = false;

	protected $casts = [
		'prm_id' => 'int',
		'rba_id' => 'int',
		'nra_semana' => 'int'
	];

	protected $fillable = [
		'prm_id',
		'rba_id',
		'nra_semana',
		'nra_promparcial'
		
	];
}