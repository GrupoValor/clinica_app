<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class TaNotaProm extends Eloquent
{
	protected $table = 'TA_NOTA_PROMEDIO';
	protected $primaryKey = 'prm_id';
	public $timestamps = false;

	protected $casts = [
		'alu_id' => 'int',
		'cur_id' => 'int',
		'cic_id' => 'int'
	];

	protected $fillable = [
		'alu_id',
		'cur_id',
		'cic_id',
		'prm_notafinal',
		'prm_estado'
	];
}