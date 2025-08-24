<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Applicant;
use App\Models\ApplicationStatusHistory;
use App\Models\User;

class ApplicationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $applicants = Applicant::all();
        $adminUser = User::whereHas('roles', function ($q) {
            $q->where('name', 'admin');
        })->first();

        $assessorUsers = User::whereHas('roles', function ($q) {
            $q->where('name', 'assessor');
        })->get();

        foreach ($applicants as $applicant) {
            // Initial registration status
            ApplicationStatusHistory::create([
                'applicant_id' => $applicant->id,
                'status' => 'pending',
                'notes' => 'Pendaftaran berhasil diterima. Menunggu verifikasi dokumen.',
                'changed_by' => $adminUser->id,
                'created_at' => $applicant->created_at,
                'updated_at' => $applicant->created_at,
            ]);

            // Random progression of status
            $progressSteps = fake()->randomElements([
                'under_review',
                'documents_verified',
                'interview_scheduled',
                'assessment_completed'
            ], fake()->numberBetween(1, 3));

            $currentDate = $applicant->created_at;

            foreach ($progressSteps as $step) {
                $currentDate = fake()->dateTimeBetween($currentDate, 'now');
                $changedBy = fake()->randomElement(array_merge([$adminUser->id], $assessorUsers->pluck('id')->toArray()));

                $notes = match ($step) {
                    'under_review' => 'Aplikasi sedang dalam tahap review oleh tim asesor.',
                    'documents_verified' => 'Semua dokumen telah diverifikasi dan dinyatakan valid.',
                    'interview_scheduled' => 'Wawancara telah dijadwalkan. Silakan cek email untuk detail.',
                    'assessment_completed' => 'Proses asesmen telah selesai. Menunggu keputusan final.',
                    default => 'Status aplikasi telah diperbarui.'
                };

                ApplicationStatusHistory::create([
                    'applicant_id' => $applicant->id,
                    'status' => $step,
                    'notes' => $notes,
                    'changed_by' => $changedBy,
                    'created_at' => $currentDate,
                    'updated_at' => $currentDate,
                ]);

                // Update applicant current status
                $applicant->update(['application_status' => $step]);
            }
        }
    }
}
