<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaUsuario
 * 
 * @property int $usu_id
 * @property int $cln_id
 * @property int $rol_id
 * @property string $usu_nrodoc
 * @property string $usu_nombre
 * @property string $usu_appate
 * @property string $usu_apmate
 * @property \Carbon\Carbon $usu_fecnac
 * @property string $usu_telno1
 * @property string $usu_telno2
 * @property string $usu_correo
 *
 * @package App\Models
 */
class TaUsuario extends Eloquent
{
	protected $table = 'ta_usuario';
	protected $primaryKey = 'usu_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'usu_id' => 'int',
		'cln_id' => 'int',
		'rol_id' => 'int'
	];

	protected $dates = [
		'usu_fecnac'
	];

	protected $fillable = [
		'cln_id',
		'rol_id',
		'usu_nrodoc',
		'usu_nombre',
		'usu_appate',
		'usu_apmate',
		'usu_fecnac',
		'usu_telno1',
		'usu_telno2',
		'usu_correo'
	];
}
