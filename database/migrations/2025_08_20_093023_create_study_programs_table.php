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
        Schema::create('study_programs', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // e.g., 'S1-SI', 'S1-TI'
            $table->string('name'); // e.g., 'Sistem Informasi', 'Teknik Informatika'
            $table->string('degree'); // e.g., 'S1', 'S2'
            $table->string('faculty'); // e.g., 'Fakultas Teknologi Informasi'
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Add study_program_id to applicants table
        Schema::table('applicants', function (Blueprint $table) {
            $table->foreignId('study_program_id')->after('graduate_category_id')->nullable()->constrained('study_programs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('applicants', function (Blueprint $table) {
            $table->dropForeign(['study_program_id']);
            $table->dropColumn('study_program_id');
        });

        Schema::dropIfExists('study_programs');
    }
};
