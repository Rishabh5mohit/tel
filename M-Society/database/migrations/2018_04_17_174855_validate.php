<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Validate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
	Schema::create('validate', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('user_id');
            $table->string('complaint_type');//family
            $table->mediumtext('complaint');
			$table->integer('type');//type of worker
			$table->integer('worker_id');
			$table->string('location');
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('validate');
    }
}
