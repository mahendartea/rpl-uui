<?php

namespace Database\Seeders;

use App\Models\StudyProgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudyProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            [
                'code' => 'S1-FAR',
                'name' => 'Farmasi',
                'degree' => 'S1',
                'faculty' => 'Fakultas Kesehatan',
                'is_active' => true,
            ],
            [
                'code' => 'S1-INF',
                'name' => 'Informatika',
                'degree' => 'S1',
                'faculty' => 'Fakultas Sains dan Teknologi',
                'is_active' => true,
            ],
            [
                'code' => 'D3-KEB',
                'name' => 'Kebidanan',
                'degree' => 'D3',
                'faculty' => 'Fakultas Kesehatan',
                'is_active' => true,
            ],
            [
                'code' => 'S1-GIZ',
                'name' => 'Ilmu Gizi',
                'degree' => 'S1',
                'faculty' => 'Fakultas Kesehatan',
                'is_active' => true,
            ],
            [
                'code' => 'S1-SI',
                'name' => 'Sistem Informasi',
                'degree' => 'S1',
                'faculty' => 'Fakultas Sains dan Teknologi',
                'is_active' => true,
            ],
            [
                'code' => 'D4-KEB',
                'name' => 'D4 Kebidanan',
                'degree' => 'D4',
                'faculty' => 'Fakultas Kesehatan',
                'is_active' => true,
            ],
            [
                'code' => 'S1-BID',
                'name' => 'Bidan Pendidik',
                'degree' => 'S1',
                'faculty' => 'Fakultas Kesehatan',
                'is_active' => true,
            ],
            [
                'code' => 'S1-PGSD',
                'name' => 'Pendidikan Guru Sekolah Dasar',
                'degree' => 'S1',
                'faculty' => 'Fakultas Sosial Sains dan Ilmu Pendidikan',
                'is_active' => true,
            ],
            [
                'code' => 'S1-KES',
                'name' => 'Kesehatan Masyarakat',
                'degree' => 'S1',
                'faculty' => 'Fakultas Kesehatan',
                'is_active' => true,
            ],
        ];

        foreach ($programs as $program) {
            StudyProgram::create($program);
        }
    }
}
