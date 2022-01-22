<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorsTable extends Migration {

	public function up()
	{
		Schema::create('Doctors', function(Blueprint $table) {
			$table->id();
			$table->string('Name', 40);
			$table->string('Email', 50)->unique();
			$table->string('Password', 50);
			$table->string('Phone', 15);
			$table->string('Address', 15);
			$table->boolean('is_admin')->default(0);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Doctors');
	}
}