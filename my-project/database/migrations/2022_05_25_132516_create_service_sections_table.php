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
        Schema::create('service_sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('start_point_id')->constrained('points');
            $table->unsignedInteger('end_point_id')->constrained('points');
            $table->string('means_of_transport_id',30)->constrained('means_of_transport');
            $table->integer('expense');
            $table->unsignedInteger('expense_classification_id')->constrained('expense_classifications');
            $table->enum('one_way_or_round_trip',['one_way','round_trip']);
            $table->boolean('is_route_overlap')->default(false);
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
        Schema::dropIfExists('service_sections');
    }
};
