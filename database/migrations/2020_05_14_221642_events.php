<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
       Schema::create('roles', function (Blueprint $table) {
           $table->bigIncrements('id_Activite');
           $table->string('nom',70);
           $table->string('Local',10);
           $table->timestamps('Date');
           $table->string('Organisateur', 100);
           $table->timestamps('Date_cree');
           $table->timestamps('Date_maj');
           $table->timestamps('Date_supp');
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
