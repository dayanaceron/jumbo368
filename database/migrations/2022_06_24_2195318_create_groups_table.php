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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('gperiodo', 30);
            $table->year('ganio');
            $table->unsignedbigInteger('teacher_id');
            $table->unsignedbigInteger('subject_id');
            $table->unsignedBigInteger('aula_id');
            $table->unsignedBigInteger('hora_id');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('aula_id')->references('id')->on('ambient_groups')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('hora_id')->references('id')->on('hour_groups')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('groups');
    }
};
