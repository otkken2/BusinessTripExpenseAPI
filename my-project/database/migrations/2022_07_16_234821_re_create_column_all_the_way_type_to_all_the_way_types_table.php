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
        Schema::table('all_the_way_types', function (Blueprint $table) {
            $table->enum("all_the_way_type",["全行程徒歩","全行程自家用車同乗","全行程公用車利用"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('all_the_way_types', function (Blueprint $table) {
            $table->dropColumn("all_the_way_type");
        });
    }
};
