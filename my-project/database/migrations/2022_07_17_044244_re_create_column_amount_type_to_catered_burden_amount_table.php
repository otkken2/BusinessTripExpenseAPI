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
        Schema::table('catered_burden_amounts', function (Blueprint $table) {
            $table->enum('amount_type',['全額','運賃','その他'])->default('その他');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catered_burden_amounts', function (Blueprint $table) {
            //
        });
    }
};
