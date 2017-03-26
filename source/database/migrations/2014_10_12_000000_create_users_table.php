<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('imagem')->default('user.png');
            $table->integer('type')->default(1);
            $table->string('lattes')->default('');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // Insert some stuff
        DB::table('users')->insert(
          array(
          'id' => '1',
          'name' => 'admin',
          'email' => 'admin@admin.com',
          'type' => '3',
          'password' => bcrypt('admin')
          )
        );

        DB::table('professors')->insert(
          array(
          'user_id' => '1',
          'registro' => '1',
          'departamento' => 'Departamento',
          'area' => 'Area'
          )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
