<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Oct 2016 06:48:47 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TACASO
 * 
 * @property int $cas_id
 * @property int $usu_id
 * @property int $cli_id
 * @property int $estcas_id
 * @property \Carbon\Carbon $cas_fecate
 * @property int $cas_usureg
 *
 * @package App\Models
 */
class TACASO extends Eloquent
{
	protected $table = 'TA_CASO';
	protected $primaryKey = 'cas_id';
	public $timestamps = false;

	protected $casts = [
		'usu_id' => 'int',
		'cli_id' => 'int',
		'estcas_id' => 'int',
		'cas_usureg' => 'int'
	];

	protected $dates = [
		'cas_fecate'
	];

	protected $fillable = [
		'usu_id',
		'cli_id',
		'estcas_id',
		'cas_fecate',
		'cas_usureg'
	];
}
