<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 28 Oct 2016 16:40:31 +0000
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
 * @property int $cas_docent
 * @property \Carbon\Carbon $cas_fecate
 * @property string $cas_objact
 * @property string $cas_observ
 * @property string $cas_result
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
		'cas_docent' => 'int'
	];

	protected $dates = [
		'cas_fecate'
	];

	protected $fillable = [
		'usu_id',
		'cli_id',
		'estcas_id',
		'cas_docent',
		'cas_fecate',
		'cas_objact',
		'cas_observ',
		'cas_result'
	];
}
