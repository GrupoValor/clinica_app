<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Oct 2016 06:48:47 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TAUSUARIOTAREA
 * 
 * @property int $usu_id
 * @property int $tar_id
 *
 * @package App\Models
 */
class TAUSUARIOTAREA extends Eloquent
{
	protected $table = 'TA_USUARIO_TAREA';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'usu_id' => 'int',
		'tar_id' => 'int'
	];

	protected $fillable = [
		'usu_id',
		'tar_id'
	];
}
