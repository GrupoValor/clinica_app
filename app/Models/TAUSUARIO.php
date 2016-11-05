<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 28 Oct 2016 18:04:00 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TAUSUARIO
 * 
 * @property int $usu_id
 * @property int $cln_id
 * @property int $rol_id
 * @property string $usu_passwd
 * 
 * @property \Illuminate\Database\Eloquent\Collection $t_a__a_l_u_m_n_o_s
 * @property \Illuminate\Database\Eloquent\Collection $t_a__c_l_i_e_n_t_e_s
 * @property \Illuminate\Database\Eloquent\Collection $t_a__c_o_m_e_n_t_a_r_i_o_s
 * @property \Illuminate\Database\Eloquent\Collection $t_a__e_v_a_l_u_a_d_o_r_s
 *
 * @package App\Models
 */
class TAUSUARIO extends Eloquent
{
	protected $table = 'TA_USUARIO';
	protected $primaryKey = 'usu_id';
	public $timestamps = false;

	protected $casts = [
		'usu_id' => 'int',
		'cln_id' => 'int',
		'rol_id' => 'int',
		'usu_activo' => 'int'
	];

	protected $fillable = [
		'cln_id',
		'rol_id',
		'usu_passwd'
		'usu_activo'
	];

	public function t_a__a_l_u_m_n_o_s()
	{
		return $this->hasMany(\App\Models\TAALUMNO::class, 'usu_id');
	}

	public function t_a__c_l_i_e_n_t_e_s()
	{
		return $this->hasMany(\App\Models\TACLIENTE::class, 'usu_id');
	}

	public function t_a__c_o_m_e_n_t_a_r_i_o_s()
	{
		return $this->hasMany(\App\Models\TACOMENTARIO::class, 'usu_id');
	}

	public function t_a__e_v_a_l_u_a_d_o_r_s()
	{
		return $this->hasMany(\App\Models\TAEVALUADOR::class, 'usu_id');
	}
}
