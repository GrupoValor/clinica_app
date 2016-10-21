<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaPrivilegio
 * 
 * @property int $pri_id
 * @property int $rol_id
 * @property string $pri_tipopr
 * @property string $rol_decrip
 *
 * @package App\Models
 */
class TaPrivilegio extends Eloquent
{
	protected $table = 'ta_privilegio';
	protected $primaryKey = 'pri_id';
	public $timestamps = false;

	protected $casts = [
		'rol_id' => 'int'
	];

	protected $fillable = [
		'rol_id',
		'pri_tipopr',
		'rol_decrip'
	];
}
