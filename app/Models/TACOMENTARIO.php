<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Oct 2016 06:48:47 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TACOMENTARIO
 * 
 * @property int $com_id
 * @property int $tar_id
 * @property int $usu_id
 * @property string $com_mensaj
 *
 * @package App\Models
 */
class TACOMENTARIO extends Eloquent
{
	protected $table = 'TA_COMENTARIO';
	protected $primaryKey = 'com_id';
	public $timestamps = false;

	protected $casts = [
		'tar_id' => 'int',
		'usu_id' => 'int'
	];

	protected $fillable = [
		'tar_id',
		'usu_id',
		'com_mensaj'
	];
}
