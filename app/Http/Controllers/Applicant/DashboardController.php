<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\ApplicantDocument;
use App\Models\StudyProgram;
use App\Models\GraduateCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $applicant = $user->applicant;

        // Jika belum ada data applicant, redirect ke profile
        if (!$applicant) {
            return redirect()->route('applicant.profile.create')
                ->with('message', 'Silakan lengkapi data profil Anda terlebih dahulu.');
        }

        // Statistik dashboard
        $stats = [
            'profile_completion' => $this->calculateProfileCompletion($applicant),
            'documents_uploaded' => $applicant->documents()->count(),
            'documents_verified' => $applicant->documents()->where('verification_status', 'accepted')->count(),
            'documents_pending' => $applicant->documents()->where('verification_status', 'pending')->count(),
            'documents_rejected' => $applicant->documents()->where('verification_status', 'rejected')->count(),
        ];

        // Dokumen yang diperlukan
        $requiredDocuments = [
            'ijazah' => 'Ijazah Terakhir',
            'transkrip' => 'Transkrip Nilai',
            'cv' => 'Curriculum Vitae',
            'sertifikat' => 'Sertifikat Kompetensi/Pelatihan',
            'pengalaman_kerja' => 'Surat Keterangan Pengalaman Kerja',
            'foto' => 'Pas Foto Terbaru',
            'ktp' => 'Kartu Tanda Penduduk',
        ];

        // Status dokumen yang sudah diupload
        $uploadedDocuments = $applicant->documents()
            ->get()
            ->keyBy('document_type');

        // Recent activities
        $recentActivities = $applicant->statusHistories()
            ->latest()
            ->take(5)
            ->get();

        return view('applicant.dashboard', compact(
            'applicant',
            'stats',
            'requiredDocuments',
            'uploadedDocuments',
            'recentActivities'
        ));
    }

    private function calculateProfileCompletion($applicant)
    {
        $requiredFields = [
            'full_name',
            'place_of_birth',
            'date_of_birth',
            'gender',
            'address',
            'phone_number',
            'graduate_category_id',
            'study_program_id'
        ];

        $completedFields = 0;
        foreach ($requiredFields as $field) {
            if (!empty($applicant->$field)) {
                $completedFields++;
            }
        }

        return round(($completedFields / count($requiredFields)) * 100);
    }
}
