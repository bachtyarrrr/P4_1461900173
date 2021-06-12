<?php

namespace App\Models;

use Eloquent;

class JenisBuku extends Eloquent
{
    protected $table = "jenis_buku";

    public function rakbuku()
    {
        return $this->hasMany('App\Models\Rakbuku');
    }

}