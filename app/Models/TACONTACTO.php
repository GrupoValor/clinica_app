<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaContacto
 * 
 * @property int $con_id
 * @property int $cln_id
 * @property int $usu_id
 * @property string $con_imagen
 * @property string $con_tipcon
 * @property string $con_nombre
 * @property string $con_correo
 * @property string $con_nrotel
 * @property string $con_descri
 *
 * @package App\Models
 */
class TaContacto extends Eloquent
{
	protected $table = 'ta_contacto';
	protected $primaryKey = 'con_id';
	public $timestamps = false;

	protected $casts = [
		'cln_id' => 'int',
		'usu_id' => 'int'
	];

	protected $fillable = [
		'cln_id',
		'usu_id',
		'con_imagen',
		'con_tipcon',
		'con_nombre',
		'con_correo',
		'con_nrotel',
		'con_descri'
	];
}
