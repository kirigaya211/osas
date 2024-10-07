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
        Schema::create('application_infos', function (Blueprint $table) {
            $table->id('ApplicationID');
            $table->string('OrganizationName', 50);
            $table->text('OrganizationDescription');
            $table->unsignedBigInteger('OrganizationID');
            $table->string('Type',50);
            $table->string('RepresentativeName',50);
            $table->string('RepresentativeEmail',50);
            $table->unsignedBigInteger('RepresentativeContact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_infos');
    }
};
