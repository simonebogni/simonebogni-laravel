<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_positions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id');
            $table->string('title');
            $table->string('period');
            $table->string('start_date');
            $table->string('end_date')->nullable();
            $table->boolean('current');
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_positions');
    }
}
