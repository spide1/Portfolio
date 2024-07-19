<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('time__dates', function (Blueprint $table) {
            $table->id();
            $table->string('time_date');
            $table->string('close_date');
            $table->integer('number');
            $table->string('email');
            $table->text('loaction');
            $table->text('sub_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('time__dates');
    }
};
