<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorsPatientsTable extends Migration {

	public function up()
	{
		Schema::create('doctors_patients', function(Blueprint $table) {
			$table->id();
			$table->string('doctor_id');
			$table->string('patient_id');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('doctors_patients');
	}
}