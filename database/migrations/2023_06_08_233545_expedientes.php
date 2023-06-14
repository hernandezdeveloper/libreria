<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Expedientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
     Schema::create('expedientes', function (Blueprint $table) {
          
        $table->engine="InnoDB";
        $table->bigIncrements('id');

        $table->BigInteger('clientes_id')->unsigned(); 
        
        $table->string('caratula');
        
        $table->timestamps();

        $table->foreign('clientes_id')->references('id')->on('clientes')->onDelete("cascade");
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
