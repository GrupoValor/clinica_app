<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaUsuarioCaso
 * 
 * @property int $cas_id
 * @property int $usu_id
 * @property \Carbon\Carbon $usucas_fecasi
 *
 * @package App\Models
 */
class TaUsuarioCaso extends Eloquent
{
	protected $table = 'ta_usuario_caso';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cas_id' => 'int',
		'usu_id' => 'int'
	];

	protected $dates = [
		'usucas_fecasi'
	];

	protected $fillable = [
		'cas_id',
		'usu_id',
		'usucas_fecasi'
	];
}
