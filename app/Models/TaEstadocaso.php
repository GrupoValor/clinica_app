<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaEstadocaso
 * 
 * @property int $tipcas_id
 * @property string $tipcas_detalle
 *
 * @package App\Models
 */
class TaEstadocaso extends Eloquent
{
	protected $table = 'ta_estadocaso';
	protected $primaryKey = 'tipcas_id';
	public $timestamps = false;

	protected $fillable = [
		'tipcas_detalle'
	];
}
