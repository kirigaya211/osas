<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->timestamp('start_time')->nullable(false);
            $table->timestamp('end_time')->nullable(false);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};