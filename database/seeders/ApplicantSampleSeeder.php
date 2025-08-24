<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Applicant;
use App\Models\StudyProgram;
use App\Models\GraduateCategory;

class ApplicantSampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get study programs and graduate categories
        $studyPrograms = StudyProgram::all();
        $graduateCategories = GraduateCategory::all();

        // Get applicant users
        $applicantUsers = User::role('applicant')->get();

        foreach ($applicantUsers as $index => $user) {
            // Create applicant profile for each user
            Applicant::create([
                'user_id' => $user->id,
                'registration_number' => 'RPL-2025-' . str_pad($index + 1, 4, '0', STR_PAD_LEFT),
                'full_name' => $user->name,
                'place_of_birth' => $this->getRandomPlace(),
                'date_of_birth' => fake()->dateTimeBetween('-45 years', '-25 years'),
                'gender' => fake()->randomElement(['male', 'female']),
                'address' => fake()->address(),
                'phone_number' => '08' . fake()->randomNumber(8, true) . fake()->randomNumber(2, true),
                'graduate_category_id' => $graduateCategories->random()->id,
                'study_program_id' => $studyPrograms->random()->id,
                'application_status' => fake()->randomElement(['draft', 'submitted', 'under_review', 'accepted']),
                'motivation' => $this->getRandomMotivation(),
            ]);
        }
    }

    private function getRandomPlace(): string
    {
        $places = [
            'Jakarta',
            'Bandung',
            'Surabaya',
            'Medan',
            'Semarang',
            'Makassar',
            'Palembang',
            'Tangerang',
            'Depok',
            'Bekasi',
            'Bogor',
            'Batam',
            'Pekanbaru',
            'Bandar Lampung',
            'Malang',
            'Yogyakarta',
            'Solo',
            'Balikpapan',
            'Samarinda',
            'Jambi'
        ];

        return fake()->randomElement($places);
    }

    private function getRandomMotivation(): string
    {
        $motivations = [
            'Saya memiliki pengalaman kerja selama 10 tahun di bidang teknologi informasi dan ingin mendapatkan pengakuan formal atas kompetensi yang telah saya miliki. Program RPL ini akan membantu saya meningkatkan karir dan membuka peluang untuk promosi di perusahaan.',

            'Sebagai seorang entrepreneur yang telah menjalankan bisnis selama 8 tahun, saya membutuhkan kredensial akademik untuk memperluas jaringan bisnis dan meningkatkan kredibilitas perusahaan. RPL memberikan kesempatan untuk mendapatkan gelar tanpa harus meninggalkan bisnis yang sedang berjalan.',

            'Saya sudah bekerja di bidang akuntansi selama 12 tahun dan memiliki berbagai sertifikat profesi. Melalui program RPL, saya berharap dapat melanjutkan studi ke jenjang yang lebih tinggi dengan mengakui pengalaman dan kompetensi yang telah saya miliki.',

            'Setelah bertahun-tahun bekerja di industri kreatif, saya ingin mengembangkan diri dengan mendapatkan gelar yang sesuai dengan bidang keahlian saya. Program RPL sangat cocok karena dapat mengakomodasi portfolio dan pengalaman praktis yang telah saya kumpulkan.',

            'Sebagai seorang yang self-taught di bidang programming, saya telah mengembangkan berbagai aplikasi dan website. RPL memberikan peluang untuk mendapatkan pengakuan akademik atas skill teknis yang telah saya kuasai melalui praktik dan pembelajaran mandiri.'
        ];

        return fake()->randomElement($motivations);
    }
}
