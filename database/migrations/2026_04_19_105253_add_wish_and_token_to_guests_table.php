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
    Schema::table('guests', function (Blueprint $table) {
        $table->text('wish')->nullable();
        $table->string('token')->unique()->nullable();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('guests', function (Blueprint $table) {
        $table->dropColumn(['wish', 'token']);
    });
}
};




