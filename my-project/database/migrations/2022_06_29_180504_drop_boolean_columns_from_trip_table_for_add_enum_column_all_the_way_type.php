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
        Schema::table('trips', function (Blueprint $table) {
            $table->dropColumn("on_foot_all");
            $table->dropColumn("use_of_private_car_all");
            $table->dropColumn("use_of_public_car_all");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->boolean('on_foot_all')->default(false);
            $table->boolean('use_of_public_car_all')->default(false);
            $table->boolean('use_of_private_car_all')->default(false);
        });
    }
};
