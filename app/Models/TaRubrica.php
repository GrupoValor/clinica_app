<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Oct 2016 06:48:47 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaRubrica
 * 
 * @property int $rba_id
 * @property string $rba_nombre
 * @property int $cln_id
 * @property int $cur_id
 * @property int $rba_peso
 * @property int $rba_maxpunt
 *
 * @package App\Models
 */
class TaRubrica extends Eloquent
{
	protected $table = 'ta_rubrica';
	protected $primaryKey = 'rba_id';
	public $timestamps = false;

	protected $casts = [
		'cln_id' => 'int',
		'cur_id' => 'int',
		'rba_peso' => 'int',
		'rba_maxpunt' => 'int'
	];

	protected $fillable = [
		'rba_nombre',
		'cln_id',
		'cur_id',
		'rba_peso',
		'rba_maxpunt'
	];
}
