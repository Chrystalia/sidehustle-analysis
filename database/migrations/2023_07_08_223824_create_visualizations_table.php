<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visualizations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('interest_by_region')->nullable();
            $table->string('interest_over_time')->nullable();
            $table->string('related_queries')->nullable();
            $table->integer('min_interest')->nullable();
            $table->integer('max_interest')->nullable();
            $table->date('min_date')->nullable();
            $table->date('max_date')->nullable();
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
        Schema::dropIfExists('visualizations');
    }
};
