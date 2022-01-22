<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientsTable extends Migration {

	public function up()
	{
		Schema::create('patients', function(Blueprint $table) {
			$table->id();
			$table->string('patient_name', 50);
			$table->string('phone', 15);
			$table->string('Detection_Dates', 50);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('patients');
	}
}