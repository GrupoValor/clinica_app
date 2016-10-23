<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Oct 2016 06:48:47 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TATAREA
 * 
 * @property int $tar_id
 * @property int $eta_id
 * @property int $tar_estado
 * @property string $tar_nombre
 * @property string $tar_descri
 * @property \Carbon\Carbon $tar_fecven
 * @property \Carbon\Carbon $tar_fecreg
 *
 * @package App\Models
 */
class TATAREA extends Eloquent
{
	protected $table = 'TA_TAREA';
	protected $primaryKey = 'tar_id';
	public $timestamps = false;

	protected $casts = [
		'eta_id' => 'int',
		'tar_estado' => 'int'
	];

	protected $dates = [
		'tar_fecven',
		'tar_fecreg'
	];

	protected $fillable = [
		'eta_id',
		'tar_estado',
		'tar_nombre',
		'tar_descri',
		'tar_fecven',
		'tar_fecreg'
	];
}
