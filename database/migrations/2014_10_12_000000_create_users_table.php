<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
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
            $table->bigIncrements('id');
            $table->string('matricule', 8)->unique();
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->string('email',100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
	    $table->string('type',2);
            $table->boolean('prof')->default(0);
            $table->rememberToken();
            $table->timestamp('cree_le')->nullable();
	    $table->timestamp('mis_a_jour_le')->nullable();
	    $table->timestamp('supprimer_le')->nullable();
        });
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
