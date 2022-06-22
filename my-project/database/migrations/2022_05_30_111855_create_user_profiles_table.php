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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->constrained();
            $table->string('staff_number',30);
            $table->string('name',30);
            $table->unsignedInteger('school_id')->constrained();
            $table->string('address',200);
            $table->unsignedInteger('job_title_id')->constrained('job_titles');
            $table->enum('role_type',['member','admin']);
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
        Schema::dropIfExists('user_profiles');
    }
};
