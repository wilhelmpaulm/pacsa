<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistrationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function(Blueprint $table) {
            $table->increments('id');
            $table->text('school')->nullable();
			$table->text('address')->nullable();
			$table->text('head_delegate')->nullable();
			$table->string('mobile1')->nullable();
			$table->string('mobile2')->nullable();
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
        Schema::drop('registrations');
    }

}
