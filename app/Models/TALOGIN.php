<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Oct 2016 06:48:47 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TALOGIN
 * 
 * @property int $usu_id
 * @property string $log_passwo
 *
 * @package App\Models
 */
class TALOGIN extends Eloquent
{
	protected $table = 'TA_LOGIN';
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
