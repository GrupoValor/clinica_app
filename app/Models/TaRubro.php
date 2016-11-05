<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class TaRubro extends Eloquent
{
	protected $table = 'ta_rubro';
	protected $primaryKey = 'rbo_id';
	public $timestamps = false;

	protected $casts = [
		'rba_id' => 'int',
		'rbo_maxpunt' => 'int'
	];

	protected $fillable = [
		'rba_id',
		'rbo_nombre',
		'rbo_maxpunt'
	];
}
