<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_MData_HOBIMEN extends Model
{
    //
    protected $table = 'mdata_hobimen';

    public function suppliers(){
        
        return $this->belongsTo('App\Models\M_Supplier', 'supplier', 'id');
    }
}
