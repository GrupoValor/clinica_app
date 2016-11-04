<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class TaCurso extends Eloquent
{
	protected $table = 'ta_curso';
	protected $primaryKey = 'cur_id';
	public $timestamps = false;

	protected $casts = [
		'cln_id' => 'int'
	];

	protected $fillable = [
		'cur_descrip',
		'cur_codigo',
		'cln_id'
	];
}
