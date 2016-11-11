<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class TaNotaProm extends Eloquent
{
	protected $table = 'ta_nota_promedio';
	protected $primaryKey = 'prm_id';
	public $timestamps = false;

	protected $casts = [
		'alu_id' => 'int',
		'cur_id' => 'int',
		'cic_id' => 'int'
	];

	protected $fillable = [
		'ralu_id',
		'cur_id',
		'cic_id',
		'prm_notafinal',
		'prm_estado'
	];
}