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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('nickname');
            $table->string('gender', 10);
            $table->date('date_of_birth');
            $table->foreignId('kinorg_id')->constrained('kinorgs');
            $table->foreignId('breed_id')->constrained('breeds');
            $table->foreignId('color_id')->constrained('colors');
            $table->foreignId('father_id')->nullable()->constrained('pets');
            $table->foreignId('mother_id')->nullable()->constrained('pets');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
