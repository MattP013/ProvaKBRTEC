<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCategoria extends Model
{
    protected $table = "tb_categoria";
    
    public function relSubCategoria(){
        return $this->hasMany('App\Models\Models\ModelSubCategoria', 'cd_subcategoria');
    }
}
