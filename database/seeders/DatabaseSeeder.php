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
        ]);

        // Create default admin user
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@ubudiyah.ac.id',
            'role' => 'admin',
        ]);

        // Create test applicant
        User::factory()->create([
            'name' => 'Test Applicant',
            'email' => 'applicant@example.com',
            'role' => 'applicant',
        ]);

        // Create test assessor
        User::factory()->create([
            'name' => 'Test Assessor',
            'email' => 'assessor@ubudiyah.ac.id',
            'role' => 'assessor',
        ]);
    }
}
