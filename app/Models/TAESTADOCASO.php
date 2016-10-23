<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Oct 2016 06:48:47 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TAESTADOCASO
 * 
 * @property int $estcas_id
 * @property string $estcas_detalle
 *
 * @package App\Models
 */
class TAESTADOCASO extends Eloquent
{
	protected $table = 'TA_ESTADOCASO';
	protected $primaryKey = 'estcas_id';
	public $timestamps = false;

	protected $fillable = [
		'estcas_detalle'
	];
}
