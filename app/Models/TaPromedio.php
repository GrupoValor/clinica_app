<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Oct 2016 06:48:47 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaPromedio
 * 
 * @property int $prm_id
 * @property int $alu_id
 * @property int $cur_id
 * @property int $cic_id
 * @property float $prm_notafinal
 * @property string $prm_estado
 *
 * @package App\Models
 */
class TaPromedio extends Eloquent
{
	protected $table = 'ta_promedio';
	protected $primaryKey = 'prm_id';
	public $timestamps = false;

	protected $casts = [
		'alu_id' => 'int',
		'cur_id' => 'int',
		'cic_id' => 'int',
		'prm_notafinal' => 'float'
	];

	protected $fillable = [
		'alu_id',
		'cur_id',
		'cic_id',
		'prm_notafinal',
		'prm_estado'
	];
}
