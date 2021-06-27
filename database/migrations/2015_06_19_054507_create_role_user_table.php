<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('rol_id')->references('id')->on('rols')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol_user');
    }
}


// Para agregar campos en esta relacion se usa en la consola de tinker el codigo: $user->roles()->attach(rol a asignar)
// Si se desea eliminar se puede usar el codigo: $user->roles()->detach(rol a eliminar)