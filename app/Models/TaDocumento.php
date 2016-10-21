<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaDocumento
 * 
 * @property int $doc_id
 * @property int $cst_id
 * @property string $doc_nombre
 * @property string $doc_tipodo
 * @property int $doc_encont
 * @property string $doc_descri
 *
 * @package App\Models
 */
class TaDocumento extends Eloquent
{
	protected $table = 'ta_documento';
	protected $primaryKey = 'doc_id';
	public $timestamps = false;

	protected $casts = [
		'cst_id' => 'int',
		'doc_encont' => 'int'
	];

	protected $fillable = [
		'cst_id',
		'doc_nombre',
		'doc_tipodo',
		'doc_encont',
		'doc_descri'
	];
}
