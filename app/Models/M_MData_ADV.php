<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_MData_ADV extends Model
{
    //
    protected $table = 'mdata_adv';

    public function suppliers(){
        
        return $this->belongsTo('App\Models\M_Supplier', 'supplier', 'id');
    }
}
