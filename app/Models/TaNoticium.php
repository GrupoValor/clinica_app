<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaNoticium
 * 
 * @property int $not_id
 * @property int $cln_id
 * @property string $not_titulo
 * @property string $not_decrip
 * @property string $not_imagen
 *
 * @package App\Models
 */
class TaNoticium extends Eloquent
{
	protected $primaryKey = 'not_id';
	public $timestamps = false;

	protected $casts = [
		'cln_id' => 'int'
	];

	protected $fillable = [
		'cln_id',
		'not_titulo',
		'not_decrip',
		'not_imagen'
	];
}
