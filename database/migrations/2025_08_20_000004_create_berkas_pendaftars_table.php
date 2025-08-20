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
        Schema::create('applicant_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id')->constrained('applicants')->onDelete('cascade');
            $table->string('document_name');
            $table->string('document_type'); // ijazah, transkrip, cv, etc
            $table->string('file_path');
            $table->enum('verification_status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->text('assessor_notes')->nullable();
            $table->foreignId('assessor_id')->nullable()->constrained('assessors');
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_documents');
    }
};
