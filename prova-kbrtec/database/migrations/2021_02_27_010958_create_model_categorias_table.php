<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_categoria', function (Blueprint $table) {
            $table->increments('cd_categoria');
            $table->string('nm_categoria');
            $table->integer('cd_subcategoria_referente')->unsigned();
            $table->foreign('cd_subcategoria_referente')->references('cd_subcategoria')
            ->on('tb_subcategoria')->onDelete('cascade')->onUpdate('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_categoria');
    }
}
