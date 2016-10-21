<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaTarea
 * 
 * @property int $tar_id
 * @property int $eta_id
 * @property int $alu_id
 * @property int $cli_id
 * @property int $tar_estado
 * @property string $tar_nombre
 * @property \Carbon\Carbon $tar_fecreg
 * @property string $tar_descri
 * @property \Carbon\Carbon $tar_fecven
 *
 * @package App\Models
 */
class TaTarea extends Eloquent
{
	protected $table = 'ta_tarea';
	protected $primaryKey = 'tar_id';
	public $timestamps = false;

	protected $casts = [
		'eta_id' => 'int',
		'alu_id' => 'int',
		'cli_id' => 'int',
		'tar_estado' => 'int'
	];

	protected $dates = [
		'tar_fecreg',
		'tar_fecven'
	];

	protected $fillable = [
		'eta_id',
		'alu_id',
		'cli_id',
		'tar_estado',
		'tar_nombre',
		'tar_fecreg',
		'tar_descri',
		'tar_fecven'
	];
}
