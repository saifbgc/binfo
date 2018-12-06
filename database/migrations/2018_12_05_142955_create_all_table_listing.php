<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTableListing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
		Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('description',200)->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });

         Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path',200);
            $table->string('reference')->nullable();
            $table->timestamps();
        });

          Schema::create('listings', function (Blueprint $table) {
			  
            $table->increments('id');
            $table->string('name',200);
            $table->text('description')->nullable();
            $table->integer('image_id')->nullable();
			$table->integer('category_id');
			
			$table->date('founded_at');
			
			$table->string('registered_with',200)->nullable();
			
			
			$table->string('email',200)->nullable();
			
			
			$table->string('phone',200)->nullable();
			
			
			$table->string('website',200)->nullable();
			$table->text('address')->nullable();
			
			
			$table->string('working_hour',20)->nullable();
			$table->string('off_days',150)->nullable();
			
			
			$table->string('facebook_url',100)->nullable();
			$table->string('twitter_url',100)->nullable();
			$table->string('linkedin_url',100)->nullable();
			$table->string('googleplus_url',100)->nullable();
			$table->string('youtube_url',100)->nullable();
			$table->string('instagram_url',100)->nullable();
			
			$table->text('additional_information')->nullable();
			
            
			$table->integer('division_id')->nullable();
			$table->integer('district_id')->nullable();			
			$table->integer('thana_id')->nullable();
			
			
            $table->integer('user_id');
            $table->integer('status')->default(0);
            $table->timestamps();
        });
		
		//division
		
		Schema::create('division', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);            
            $table->timestamps();
        });
		
		//district
		
		Schema::create('district', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
			$table->integer('division_id');            
            $table->timestamps();
        });
		
		
		
		//thana
		
		Schema::create('thana', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
			$table->integer('district_id');             
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
        //
    }
}
