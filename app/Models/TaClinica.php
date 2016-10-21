<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaClinica
 * 
 * @property int $cln_id
 * @property string $cln_nombre
 * @property string $cln_descri
 *
 * @package App\Models
 */
class TaClinica extends Eloquent
{
	protected $table = 'ta_clinica';
	protected $primaryKey = 'cln_id';
	public $timestamps = false;

	protected $fillable = [
		'cln_nombre',
		'cln_descri'
	];
}
