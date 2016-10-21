<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaRol
 * 
 * @property int $rol_id
 * @property int $rol_nivela
 * @property string $rol_nombre
 * @property string $rol_decrip
 *
 * @package App\Models
 */
class TaRol extends Eloquent
{
	protected $table = 'ta_rol';
	protected $primaryKey = 'rol_id';
	public $timestamps = false;

	protected $casts = [
		'rol_nivela' => 'int'
	];

	protected $fillable = [
		'rol_nivela',
		'rol_nombre',
		'rol_decrip'
	];
}
