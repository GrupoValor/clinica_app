<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Oct 2016 06:48:47 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TACONSULTUM
 * 
 * @property int $cst_id
 * @property int $cas_id
 * @property string $cst_titulo
 * @property string $cst_descri
 * @property string $cst_objeti
 * @property string $cst_result
 *
 * @package App\Models
 */
class TACONSULTUM extends Eloquent
{
	protected $primaryKey = 'cst_id';
	public $timestamps = false;

	protected $casts = [
		'cas_id' => 'int'
	];

	protected $fillable = [
		'cas_id',
		'cst_titulo',
		'cst_descri',
		'cst_objeti',
		'cst_result'
	];
}
