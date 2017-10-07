<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class XmlModelMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbxml', function (Blueprint $table){
           $table->increments('id');
           $table->integer('nrNF');
           $table->string('nomeRemetente');
           $table->string('nomeDestinatario');
           $table->date('dataEmissao');
           $table->decimal('valorNF', 7,2);
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
        Schema::dropIfExists('tbxml');
    }
}
