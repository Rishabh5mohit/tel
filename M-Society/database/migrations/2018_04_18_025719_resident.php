<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Resident extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resident', function (Blueprint $table) {
		     $table->increments('id');
			 $table->integer('user_id');
			 $table->integer('hasRegistered');
			 $table->string('address');		
			$table->rememberToken();
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
            Schema::dropIfExists('resident');
 
    }
}
