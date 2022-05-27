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
        Schema::create('service_section_trip', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('trip_id')->constrained('trips');
            $table->unsignedInteger('service_section_id')->constrained('service_sections');
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
        Schema::dropIfExists('service_section_trip');
    }
};
