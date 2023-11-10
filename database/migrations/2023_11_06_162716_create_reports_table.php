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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('breakfastPhoto')
                ->nullable();
            $table->string('lunchPhoto')
                  ->nullable();
            $table->string('dinnerPhoto')
                  ->nullable();
            $table->string('snack1Photo')
                  ->nullable();
            $table->string('snack2Photo')
                ->nullable();
            $table->string('snack3Photo')
                ->nullable();
            $table->string('comment')
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
