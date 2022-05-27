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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->integer('first_day');
            $table->enum('day_or_overnight',['day','overnight'])->default('day');
            $table->unsignedInteger('purpose_id')->constrained();
            $table->unsignedInteger('place_of_business_id')->constrained('places_of_business');
            $table->unsignedInteger('user_id')->constrained('users');
            $table->boolean('on_foot_all')->default(false);
            $table->boolean('go_directly')->default(false);
            $table->boolean('return_directly')->default(false);
            $table->boolean('use_of_public_car_all')->default(false);
            $table->boolean('use_of_private_car_all')->default(false);
            $table->integer('miscellaneous_expense')->default(120);
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
        Schema::dropIfExists('trips');
    }
};
