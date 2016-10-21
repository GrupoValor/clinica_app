<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 21 Oct 2016 22:03:52 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaEtapa
 * 
 * @property int $eta_id
 * @property int $cst_id
 * @property string $eta_entida
 * @property string $eta_descri
 *
 * @package App\Models
 */
class TaEtapa extends Eloquent
{
	protected $table = 'ta_etapa';
	protected $primaryKey = 'eta_id';
	public $timestamps = false;

	protected $casts = [
		'cst_id' => 'int'
	];

	protected $fillable = [
		'cst_id',
		'eta_entida',
		'eta_descri'
	];
}
