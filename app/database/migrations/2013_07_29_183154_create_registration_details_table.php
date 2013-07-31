<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistrationDetailsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_details', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('registration_no')->nullable();
			$table->text('name')->nullable();
			$table->string('gender')->nullable();
			$table->string('type')->nullable();
			$table->string('contact')->nullable();
			$table->string('email')->nullable();
			$table->string('status')->nullable();
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
        Schema::drop('registration_details');
    }

}
