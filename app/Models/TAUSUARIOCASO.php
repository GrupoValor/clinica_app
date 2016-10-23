<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Oct 2016 06:48:47 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TAUSUARIOCASO
 * 
 * @property int $cas_id
 * @property int $usu_id
 *
 * @package App\Models
 */
class TAUSUARIOCASO extends Eloquent
{
	protected $table = 'TA_USUARIO_CASO';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cas_id' => 'int',
		'usu_id' => 'int'
	];

	protected $fillable = [
		'cas_id',
		'usu_id'
	];
}
