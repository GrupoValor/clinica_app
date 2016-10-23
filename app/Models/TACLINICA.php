<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Oct 2016 06:48:47 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TACLINICA
 * 
 * @property int $cln_id
 * @property string $cln_nombre
 * @property string $cln_urlfbk
 * @property string $cln_urltwi
 * @property string $cln_urlgoo
 * @property string $cln_descri
 * @property string $cln_direcc
 * @property string $cln_mision
 * @property string $cln_vision
 *
 * @package App\Models
 */
class TACLINICA extends Eloquent
{
	protected $table = 'TA_CLINICA';
	protected $primaryKey = 'cln_id';
	public $timestamps = false;

	protected $fillable = [
		'cln_nombre',
		'cln_urlfbk',
		'cln_urltwi',
		'cln_urlgoo',
		'cln_descri',
		'cln_direcc',
		'cln_mision',
		'cln_vision'
	];
}
