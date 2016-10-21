<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaEvaluador
 * 
 * @property int $eva_id
 * @property string $eva_codpuc
 * @property int $usu_id
 *
 * @package App\Models
 */
class TaEvaluador extends Eloquent
{
	protected $table = 'ta_evaluador';
	protected $primaryKey = 'eva_id';
	public $timestamps = false;

	protected $casts = [
		'usu_id' => 'int'
	];

	protected $fillable = [
		'eva_codpuc',
		'usu_id'
	];
}
