<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicinesTable extends Migration {

	public function up()
	{
		Schema::create('medicines', function(Blueprint $table) {
			$table->id();
			$table->string('medicine_name', 50);
			$table->string('description', 255);
			$table->string('how_often', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('medicines');
	}
}