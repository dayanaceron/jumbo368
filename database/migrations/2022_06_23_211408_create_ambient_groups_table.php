<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambient_groups', function (Blueprint $table) {
            $table->id();
            $table->string('aula_lunes', 4);
            $table->string('aula_martes', 4);
            $table->string('aula_miercoles', 4);
            $table->string('aula_jueves', 4);
            $table->string('aula_viernes', 4);
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
        Schema::dropIfExists('ambient_groups');
    }
};
