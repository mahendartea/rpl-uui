<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GraduateCategorySeeder::class,
            StudyProgramSeeder::class,
            RolePermissionSeeder::class, // This will create all users with proper roles
            AssessorDataSeeder::class, // This will create assessor profile data
            ApplicantSampleSeeder::class, // This will create sample applicant profiles
            DocumentSampleSeeder::class, // This will create sample documents
            ApplicationStatusSeeder::class, // This will create status histories
        ]);
    }
}
