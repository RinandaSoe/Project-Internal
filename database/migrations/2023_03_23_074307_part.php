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
        Schema::create('parts', function (Blueprint $table) {
            $table->id();
            $table->string('part_id')->nullable();
            $table->string('name')->nullable();
            $table->string('vendor')->nullable();
            $table->integer('qty')->nullable();
            $table->bigInteger('contract_price')->nullable();
            $table->bigInteger('cost_price')->nullable();
            $table->bigInteger('cash_flow')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parts');
    }
};
