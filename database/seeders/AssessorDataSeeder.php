<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Assessor;

class AssessorDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assessorUsers = User::whereHas('roles', function ($q) {
            $q->where('name', 'assessor');
        })->get();

        $assessorData = [
            [
                'employee_id' => 'ASR001',
                'expertise_area' => 'Teknologi Informasi & Komputer',
                'is_active' => true,
            ],
            [
                'employee_id' => 'ASR002',
                'expertise_area' => 'Pendidikan & Manajemen',
                'is_active' => true,
            ]
        ];

        foreach ($assessorUsers as $index => $user) {
            if (isset($assessorData[$index])) {
                Assessor::create([
                    'user_id' => $user->id,
                    'employee_id' => $assessorData[$index]['employee_id'],
                    'full_name' => $user->name,
                    'expertise_area' => $assessorData[$index]['expertise_area'],
                    'is_active' => $assessorData[$index]['is_active'],
                ]);
            }
        }
    }
}
