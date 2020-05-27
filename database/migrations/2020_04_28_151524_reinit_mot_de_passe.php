<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReinitMotDePasse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {		
	  Schema::create('reinit_mot_de_passe', function (Blueprint $table) {
	    $table->string('email');
            $table->string('token');
            $table->timestamp('created_at')->nullable();

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
