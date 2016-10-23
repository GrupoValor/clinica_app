<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Oct 2016 06:48:47 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TAETAPA
 * 
 * @property int $eta_id
 * @property int $cst_id
 * @property string $eta_tipeta
 * @property string $eta_entida
 * @property string $eta_descri
 *
 * @package App\Models
 */
class TAETAPA extends Eloquent
{
	protected $table = 'TA_ETAPA';
	protected $primaryKey = 'eta_id';
	public $timestamps = false;

	protected $casts = [
		'cst_id' => 'int'
	];

	protected $fillable = [
		'cst_id',
		'eta_tipeta',
		'eta_entida',
		'eta_descri'
	];
}
