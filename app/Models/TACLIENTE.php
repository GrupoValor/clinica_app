<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Oct 2016 06:48:47 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TACLIENTE
 * 
 * @property int $cli_id
 * @property int $usu_id
 * @property string $cli_pobvul
 * @property int $cli_numhij
 * @property string $cli_nivedu
 * @property string $cli_ocupac
 * @property string $cli_direcc
 *
 * @package App\Models
 */
class TACLIENTE extends Eloquent
{
	protected $table = 'TA_CLIENTE';
	protected $primaryKey = 'cli_id';
	public $timestamps = false;

	protected $casts = [
		'usu_id' => 'int',
		'cli_numhij' => 'int'
	];

	protected $fillable = [
		'usu_id',
		'cli_pobvul',
		'cli_numhij',
		'cli_nivedu',
		'cli_ocupac',
		'cli_direcc'
	];
}
