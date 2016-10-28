<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 28 Oct 2016 15:47:21 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TAEVALUADOR
 * 
 * @property int $eva_id
 * @property int $usu_id
 * @property string $eva_codpuc
 * @property string $eva_tipeva
 * @property string $eva_nombre
 * @property string $eva_correo
 *
 * @package App\Models
 */
class TAEVALUADOR extends Eloquent
{
	protected $table = 'TA_EVALUADOR';
	protected $primaryKey = 'eva_id';
	public $timestamps = false;

	protected $casts = [
		'usu_id' => 'int'
	];

	protected $fillable = [
		'usu_id',
		'eva_codpuc',
		'eva_tipeva',
		'eva_nombre',
		'eva_correo'
	];
}
