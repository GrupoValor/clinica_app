<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaPersona
 * 
 * @property int $con_id
 * @property string $per_apelli
 * @property string $per_cargop
 *
 * @package App\Models
 */
class TaPersona extends Eloquent
{
	protected $table = 'ta_persona';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'con_id' => 'int'
	];

	protected $fillable = [
		'con_id',
		'per_apelli',
		'per_cargop'
	];
}
