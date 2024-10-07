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
        Schema::create('denied_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('StatusID');
            $table->text('Feedback');
            $table->timestamps();

            $table->foreign('StatusID')->references('StatusID')->on('application_status_lists');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denied_lists');
    }
};
