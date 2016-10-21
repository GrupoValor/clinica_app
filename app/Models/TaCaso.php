<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaCaso
 * 
 * @property int $cas_id
 * @property int $usu_id
 * @property int $cst_id
 * @property int $cln_id
 * @property int $cli_id
 * @property int $tipcas_id
 * @property string $cas_estado
 * @property string $cas_fecate
 *
 * @package App\Models
 */
class TaCaso extends Eloquent
{
	protected $table = 'ta_caso';
	protected $primaryKey = 'cas_id';
	public $timestamps = false;

	protected $casts = [
		'usu_id' => 'int',
		'cst_id' => 'int',
		'cln_id' => 'int',
		'cli_id' => 'int',
		'tipcas_id' => 'int'
	];

	protected $fillable = [
		'usu_id',
		'cst_id',
		'cln_id',
		'cli_id',
		'tipcas_id',
		'cas_estado',
		'cas_fecate'
	];
}
