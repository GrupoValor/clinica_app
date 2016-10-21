<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaConsultum
 * 
 * @property int $cst_id
 * @property string $cst_titulo
 * @property \Carbon\Carbon $cst_fecha
 * @property string $cst_descrip
 * @property string $cst_objeti
 * @property string $cst_resultado
 *
 * @package App\Models
 */
class TaConsultum extends Eloquent
{
	protected $primaryKey = 'cst_id';
	public $timestamps = false;

	protected $dates = [
		'cst_fecha'
	];

	protected $fillable = [
		'cst_titulo',
		'cst_fecha',
		'cst_descrip',
		'cst_objeti',
		'cst_resultado'
	];
}
