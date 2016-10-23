<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Oct 2016 06:48:47 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TAALUMNO
 * 
 * @property int $alu_id
 * @property int $usu_id
 * @property string $alu_codpuc
 * @property int $alu_volunt
 *
 * @package App\Models
 */
class TAALUMNO extends Eloquent
{
	protected $table = 'TA_ALUMNO';
	protected $primaryKey = 'alu_id';
	public $timestamps = false;

	protected $casts = [
		'usu_id' => 'int',
		'alu_volunt' => 'int'
	];

	protected $fillable = [
		'usu_id',
		'alu_codpuc',
		'alu_volunt'
	];
}
