<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Oct 2016 01:25:36 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TACONTACTO
 * 
 * @property int $con_id
 * @property int $cln_id
 * @property string $con_tipcon
 * @property string $con_nombre
 * @property string $con_nrotel
 * @property string $con_direcc
 * @property string $con_dirweb
 * @property string $con_correo
 *
 * @package App\Models
 */
class TACONTACTO extends Eloquent
{
	protected $table = 'TA_CONTACTO';
	protected $primaryKey = 'con_id';
	public $timestamps = false;

	protected $casts = [
		'cln_id' => 'int'
	];

	protected $fillable = [
		'cln_id',
		'con_tipcon',
		'con_nombre',
		'con_nrotel',
		'con_direcc',
		'con_dirweb',
		'con_correo'
	];
}
