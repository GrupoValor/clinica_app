<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Oct 2016 06:48:47 +0000
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
		'eva_tipeva'
	];
}
