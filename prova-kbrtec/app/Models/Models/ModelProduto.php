<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProduto extends Model
{
    protected $fillable = ['nm_produto', 'nm_categoria', 'vl_produto', 'ds_imagem_produto','sg_status'];

    protected $table = "tb_produto";
}
