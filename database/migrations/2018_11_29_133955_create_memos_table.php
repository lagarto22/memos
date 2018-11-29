<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemosTable.php extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //campos para memos

        Schema::create('memos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->string('de');
            $table->string('a');
            $table->string('cc');
            $table->string('asunto');
            $table->string('descripcion');
            $table->string('firma');
         //   $table->integer('npagina');
         //   $table->integer('edicion');
         //   $table->string('autor');
         //   $table->decimal('precio',5,2);
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
        //
    }
}
