<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaColaborador
 * 
 * @property int $col_id
 * @property int $doc_id
 * @property string $col_correo
 * @property string $col_nombre
 * @property string $col_nrotel
 * @property string $col_mensaj
 *
 * @package App\Models
 */
class TaColaborador extends Eloquent
{
	protected $table = 'ta_colaborador';
	protected $primaryKey = 'col_id';
	public $timestamps = false;

	protected $casts = [
		'doc_id' => 'int'
	];

	protected $fillable = [
		'doc_id',
		'col_correo',
		'col_nombre',
		'col_nrotel',
		'col_mensaj'
	];
}
