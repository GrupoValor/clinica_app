<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Oct 2016 06:48:47 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class TANOTICIA extends Eloquent
{
    protected $table = 'TA_NOTICIA';
    protected $primaryKey = 'not_id';
    public $timestamps = false;

    protected $casts = [
        'not_enweb'=>'int',
        'not_enpanel' => 'int',
        'not_visible' => 'int'
    ];

    protected $fillable = [
        'not_titulo',
        'not_autor',
        'not_fecha',
        'not_descr',
        'not_imagen',
        'not_linkNoticia',
        'not_enweb',
        'not_enpanel',
        'not_visible',
        'not_dateModify'
    ];

}
