<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class TaNotaComentario extends Eloquent
{
	protected $table = 'TA_NOTA_COMENTARIO';
	protected $primaryKey = 'cmr_id';
	public $timestamps = false;

	protected $casts = [
		'nra_id' => 'int',
		'usu_id' => 'int',
	];

	protected $fillable = [
		'nra_id',
		'cmr_desc',
		'usu_id',
		'cmr_fecha_emision',
		'cmr_fecha_modif'
		
	];
}