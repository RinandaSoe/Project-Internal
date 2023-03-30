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
        Schema::create('vendor_jasas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('vendor_id');
            $table->string('kode_jasa')->nullable();
            $table->string('satuan')->nullable();
            $table->string('kode_jasa_so');
            $table->string('nama_jasa')->nullable();
            $table->integer('qty')->nullable();
            $table->bigInteger('contract_price')->nullable();
            $table->bigInteger('cost_price')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        
            $table->foreign('vendor_id')->references('id')->on('vendors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor_jasas');
    }
};
