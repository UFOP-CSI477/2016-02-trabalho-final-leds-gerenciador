<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoProfProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno__prof__projetos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('projeto_id')->unsigned();
            $table->foreign('projeto_id')->references('id')->on('projetos');
            $table->integer('aluno_id')->unsigned();
            $table->foreign('aluno_id')->references('id')->on('alunos');
            $table->integer('professor_id')->unsigned();
            $table->foreign('professor_id')->references('id')->on('professors');
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
        Schema::dropIfExists('aluno__prof__projetos');
    }
}
