<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaInstitucion
 * 
 * @property int $con_id
 * @property string $ins_direcc
 * @property string $ins_pagweb
 *
 * @package App\Models
 */
class TaInstitucion extends Eloquent
{
	protected $table = 'ta_institucion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'con_id' => 'int'
	];

	protected $fillable = [
		'con_id',
		'ins_direcc',
		'ins_pagweb'
	];
}
