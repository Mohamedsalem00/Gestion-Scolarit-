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
        Schema::table('evoluations', function (Blueprint $table) {
            $table->time('hDebut');
        });
        Schema::table('evoluations', function (Blueprint $table) {
            $table->time('hFine');
             
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('evoluations', function (Blueprint $table) {
            //
        });
    }
};
