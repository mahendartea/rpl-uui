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
        Schema::create('document_assessments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_document_id')->constrained('applicant_documents')->onDelete('cascade');
            $table->foreignId('assessor_id')->constrained('assessors');
            $table->integer('score')->nullable(); // 0-100
            $table->text('comments')->nullable();
            $table->enum('recommendation', ['pass', 'fail', 'need_review'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_assessments');
    }
};
