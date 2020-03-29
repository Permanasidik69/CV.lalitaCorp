<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_MData_OROKKIDS extends Model
{
    //
    protected $table = 'mdata_orokkids';

    public function suppliers(){
        
        return $this->belongsTo('App\Models\M_Supplier', 'supplier', 'id');
    }
}
