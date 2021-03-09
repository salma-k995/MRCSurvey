<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('question');
            $table->integer('ordre');
            $table->integer('note');
            $table->string('type');
            $table->string('reponse');
          //  $table->string('text');
            //$table->string('numérique');
            //$table->string('choix_unique');
            //$table->string('choix_multiple');
            //$table->unsignedBigInteger('section_id');
           // $table->foreign('section_id')->references('id')->on('enquetes')->onDelete('cascade');
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
        Schema::dropIfExists('questions');
    }
}
