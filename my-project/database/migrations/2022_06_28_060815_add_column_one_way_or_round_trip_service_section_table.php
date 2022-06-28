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
        Schema::table('service_sections', function (Blueprint $table) {
            $table->enum('one_way_or_round_trip',[1,2]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_sections', function (Blueprint $table) {
            $table->dropColumn(('one_way_or_round_trip'));
        });
    }
};
