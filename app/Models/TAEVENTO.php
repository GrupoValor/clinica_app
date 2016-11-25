<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 28 Oct 2016 18:05:02 +0000
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;


class TAEVENTO extends Eloquent
{
    protected $table = 'TA_EVENTO';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $casts = [
        'active' => 'int'
    ];

    protected $fillable = [
        'title',
        'start',
        'end',
        'description',
        'image',
        'active',
        'link'
    ];
}
