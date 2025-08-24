<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Applicant;
use App\Models\ApplicantDocument;
use App\Models\StudyProgram;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Admin dashboard statistics
        $stats = [
            'total_users' => User::count(),
            'total_applicants' => Applicant::count(),
            'pending_applications' => Applicant::where('application_status', 'submitted')->count(),
            'verified_documents' => ApplicantDocument::where('verification_status', 'accepted')->count(),
            'pending_documents' => ApplicantDocument::where('verification_status', 'pending')->count(),
            'total_programs' => StudyProgram::count(),
        ];

        // Recent applications
        $recentApplications = Applicant::with(['user', 'studyProgram'])
            ->latest()
            ->take(10)
            ->get();

        // Documents needing verification
        $pendingDocuments = ApplicantDocument::with(['applicant.user'])
            ->where('verification_status', 'pending')
            ->latest()
            ->take(10)
            ->get();

        return view('admin.dashboard', compact('stats', 'recentApplications', 'pendingDocuments'));
    }
}
