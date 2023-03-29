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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_sales_order')->nullable();
            $table->integer('project_id')->nullable();
            $table->string('name_project')->nullable();
            $table->date('date')->nullable();
            $table->string('prospek')->nullable();
            $table->date('order_date_so')->nullable();
            $table->string('term_of_project')->nullable();
            $table->date('delivery_date_so')->nullable();
            $table->integer('no_sppbj')->nullable();
            $table->date('date_sppbj')->nullable();
            $table->string('currency')->nullable();
            $table->string('term_of_payment')->nullable();
            $table->bigInteger('nilai_kontrak')->nullable();
            $table->string('status_project')->nullable();
            $table->string('document_files')->nullable();
            $table->timestamps();
        });  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
