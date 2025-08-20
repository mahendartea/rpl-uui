<?php

namespace Database\Seeders;

use App\Models\GraduateCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GraduateCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'category_name' => 'SMA',
                'description' => 'Lulusan Sekolah Menengah Atas atau sederajat',
            ],
            [
                'category_name' => 'D2',
                'description' => 'Lulusan Diploma 2',
            ],
            [
                'category_name' => 'D3',
                'description' => 'Lulusan Diploma 3',
            ],
        ];

        foreach ($categories as $category) {
            GraduateCategory::create($category);
        }
    }
}
