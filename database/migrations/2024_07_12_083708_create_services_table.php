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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service');
            $table->string('service_title');
            $table->text('description');
            $table->string('design1');
            $table->string('description1');
            $table->string('design2');
            $table->string('description2');
            $table->string('design3');
            $table->string('description3');
            $table->string('design4');
            $table->string('description4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
