<?php

namespace App\Models;
 use Eloquent;

class Rakbuku extends Eloquent{

    protected $table = 'rak_buku';

    public function jenis()
    {
        return $this->belongsTo('App\Models\JenisBuku');
    }

    public function buku()
    {
        return $this->belongsTo('App\Models\Buku');
    }

}
// <?php

// namespace App\Models;
//  use Eloquent;

// class Rakbuku extends Eloquent{

//     protected $table = 'rak_buku';

//     public function buku()
//     {
//         return $this->belongsTo('App\Models\Buku');
//     }

//     public function jenis_buku()
//     {
//         return $this->belongsTo('App\Models\JenisBuku');
//     }

// }