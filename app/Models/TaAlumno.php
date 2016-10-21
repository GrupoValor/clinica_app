<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaAlumno
 * 
 * @property int $alu_id
 * @property string $alu_codpuc
 * @property int $alu_volunt
 * @property int $usu_id
 *
 * @package App\Models
 */
class TaAlumno extends Eloquent
{
	protected $table = 'ta_alumno';
	protected $primaryKey = 'alu_id';
	public $timestamps = false;

	protected $casts = [
		'alu_volunt' => 'int',
		'usu_id' => 'int'
	];

	protected $fillable = [
		'alu_codpuc',
		'alu_volunt',
		'usu_id'
	];
}
