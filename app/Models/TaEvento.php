<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaEvento
 * 
 * @property int $eve_id
 * @property int $cln_id
 * @property string $eve_titulo
 * @property string $eve_decrip
 * @property string $eve_imagen
 * @property \Carbon\Carbon $eve_fechae
 *
 * @package App\Models
 */
class TaEvento extends Eloquent
{
	protected $table = 'ta_evento';
	protected $primaryKey = 'eve_id';
	public $timestamps = false;

	protected $casts = [
		'cln_id' => 'int'
	];

	protected $dates = [
		'eve_fechae'
	];

	protected $fillable = [
		'cln_id',
		'eve_titulo',
		'eve_decrip',
		'eve_imagen',
		'eve_fechae'
	];
}
