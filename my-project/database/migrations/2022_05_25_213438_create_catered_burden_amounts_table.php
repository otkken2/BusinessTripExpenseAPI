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
        Schema::create('catered_burden_amounts', function (Blueprint $table) {
            $table->id();
            $table->integer('amount')->default(0);
            $table->enum('amount_type',['full_amount','fare','other'])->default('other');
            $table->unsignedInteger('trip_id')->constrained('trips');
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
        Schema::dropIfExists('catered_burden_amounts');
    }
};
