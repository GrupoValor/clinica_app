<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class TaNotaRubro	 extends Eloquent
{
	protected $table = 'ta_nota_rubro';
	protected $primaryKey = 'nrb_id';
	public $timestamps = false;

	protected $casts = [
		'nra_id' => 'int',
		'rbo_id' => 'int',
		'nrb_semana' => 'int'
	];

	protected $fillable = [
		'nra_id',
		'rbo_id',
		'nrb_id',
		'nrb_semana',
		'nrb_puntaje'
	];
}