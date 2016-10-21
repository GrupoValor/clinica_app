<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaLogin
 * 
 * @property int $usu_id
 * @property string $log_passwo
 *
 * @package App\Models
 */
class TaLogin extends Eloquent
{
	protected $table = 'ta_login';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'usu_id' => 'int'
	];

	protected $fillable = [
		'usu_id',
		'log_passwo'
	];
}
