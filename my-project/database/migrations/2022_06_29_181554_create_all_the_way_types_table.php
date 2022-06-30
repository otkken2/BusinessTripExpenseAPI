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
        Schema::create('all_the_way_types', function (Blueprint $table) {
            $table->id();
            $table->enum("all_the_way_type",["onFootAll","useOfPublicCarAll","usePrivateCarAll"]);
            $table->unsignedInteger("trip_id")->constrained("trips");
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
        Schema::dropIfExists('all_the_way_types');
    }
};
