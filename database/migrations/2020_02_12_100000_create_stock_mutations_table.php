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
        Schema::create(config('stock.table'), function (Blueprint $table) {
            $table->id();
            $table->morphs('stockable');
            $table->string('reference_type')->nullable();
            $table->foreignId('reference_id')->nullable();
            $table->integer('amount');
            $table->text('description')->nullable();
            $table->timestamps();

            $table->index(['reference_type', 'reference_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(config('stock.table'));
    }
};
