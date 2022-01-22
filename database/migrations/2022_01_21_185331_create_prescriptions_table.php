<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrescriptionsTable extends Migration {

	public function up()
	{
		Schema::create('prescriptions', function(Blueprint $table) {
			$table->id();
			$table->string('medicine_name', 50);
			$table->string('description', 255);
			$table->string('how_often', 100);
			$table->string('patient_name', 50);
			$table->string('doctor_id');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('prescriptions');
	}
}