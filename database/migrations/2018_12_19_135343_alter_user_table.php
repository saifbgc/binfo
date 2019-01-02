<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
          Schema::table('users', function (Blueprint $table) {
            $table->string('mobile',100)->nullable();
            $table->string('phone',100)->nullable();
            $table->string('city',100)->nullable();
            $table->string('street',100)->nullable();
            $table->string('zip',100)->nullable();
            $table->string('address',200)->nullable();
            $table->string('about',300)->nullable();
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
