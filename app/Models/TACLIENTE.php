<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 28 Oct 2016 16:07:04 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TACLIENTE
 * 
 * @property int $cli_id
 * @property int $usu_id
 * @property string $cli_pobvul
 * @property int $cli_numhij
 * @property string $cli_nivedu
 * @property string $cli_ocupac
 * @property string $cli_direcc
 * @property string $cli_genero
 * @property string $cli_otrdep
 * @property string $cli_nombre
 * @property string $cli_nrodoc
 * @property string $cli_telno1
 * @property string $cli_telno2
 * @property string $cli_correo
 * @property \Carbon\Carbon $cli_fecnac
 * 
 * @property \Illuminate\Database\Eloquent\Collection $t_a__c_a_s_o_s
 *
 * @package App\Models
 */
class TACLIENTE extends Eloquent
{
	protected $table = 'TA_CLIENTE';
	protected $primaryKey = 'cli_id';
	public $timestamps = false;

	protected $casts = [
		'usu_id' => 'int',
		'cli_numhij' => 'int'
	];

	protected $dates = [
		'cli_fecnac'
	];

	protected $fillable = [
		'usu_id',
		'cli_pobvul',
		'cli_numhij',
		'cli_nivedu',
		'cli_ocupac',
		'cli_direcc',
		'cli_genero',
		'cli_otrdep',
		'cli_nombre',
		'cli_nrodoc',
		'cli_telno1',
		'cli_telno2',
		'cli_correo',
		'cli_fecnac'
	];

	public function t_a__c_a_s_o_s()
	{
		return $this->hasMany(\App\Models\TACASO::class, 'cli_id');
	}
}
