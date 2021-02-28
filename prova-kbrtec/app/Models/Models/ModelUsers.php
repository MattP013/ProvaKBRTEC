<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelUsers extends Model
{
    protected $fillable = ['nm_usuario', 'nm_email', 'nm_senha', 'sg_tipo_usuario'];
    protected $guarded = ['cd_usuario'];
    protected $table = "tb_usuario";
    
}
