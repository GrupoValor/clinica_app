<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 28 Oct 2016 18:05:02 +0000
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
 * @property string $alu_nrodoc
 * @property string $alu_correo
 * @property string $alu_nombre
 * 
 * @property \App\Models\TAUSUARIO $t_a_u_s_u_a_r_i_o
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
		'alu_volunt' => 'int',
		'per_id' => 'int'
	];

	protected $fillable = [
		'usu_id',
		'alu_codpuc',
		'per_id',
		'alu_volunt',
		'alu_nrodoc',
		'alu_correo',
		'alu_nombre'
	];

	public function t_a_u_s_u_a_r_i_o()
	{
		return $this->belongsTo(\App\Models\TAUSUARIO::class, 'usu_id');
	}
}
