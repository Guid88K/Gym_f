<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExeProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exe_programs', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->string('days_name');
            $table->longText('name');
            $table->longText('gif');
            $table->longText('times');
            $table->longText('description');
            $table->integer('programs_id');
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
        Schema::dropIfExists('exe__programs');
    }
}
