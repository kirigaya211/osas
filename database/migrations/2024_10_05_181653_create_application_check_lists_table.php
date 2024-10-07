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
        Schema::create('application_check_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ApplicationID');
            $table->string('ChecklistItem',255);
            $table->string('Feedback',255)->nullable();
            $table->timestamps();

            $table->foreign('ApplicationID')->references('ApplicationID')->on('application_infos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_check_lists');
    }
};
