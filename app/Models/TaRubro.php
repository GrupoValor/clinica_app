<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Oct 2016 06:48:47 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaRubro
 * 
 * @property int $rbo_id
 * @property string $rbo_nombre
 * @property int $rba_id
 * @property int $rbo_maxpunt
 *
 * @package App\Models
 */
class TaRubro extends Eloquent
{
	protected $table = 'ta_rubro';
	protected $primaryKey = 'rbo_id';
	public $timestamps = false;

	protected $casts = [
		'rba_id' => 'int',
		'rbo_maxpunt' => 'int'
	];

	protected $fillable = [
		'rbo_nombre',
		'rba_id',
		'rbo_maxpunt'
	];
}
