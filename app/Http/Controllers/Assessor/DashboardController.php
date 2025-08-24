<?php

namespace App\Http\Controllers\Assessor;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\ApplicantDocument;
use App\Models\DocumentAssessment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $assessor = auth()->user();

        // Assessor dashboard statistics
        $stats = [
            'total_applications' => Applicant::whereIn('application_status', ['submitted', 'under_review'])->count(),
            'pending_documents' => ApplicantDocument::where('verification_status', 'pending')->count(),
            'assessed_by_me' => DocumentAssessment::where('assessor_id', $assessor->id)->count(),
            'pending_assessments' => ApplicantDocument::where('verification_status', 'pending')
                ->whereDoesntHave('assessments', function ($query) use ($assessor) {
                    $query->where('assessor_id', $assessor->id);
                })->count(),
        ];

        // Applications to review
        $applicationsToReview = Applicant::with(['user', 'studyProgram'])
            ->whereIn('application_status', ['submitted', 'under_review'])
            ->latest()
            ->take(10)
            ->get();

        // Documents to verify
        $documentsToVerify = ApplicantDocument::with(['applicant.user'])
            ->where('verification_status', 'pending')
            ->latest()
            ->take(10)
            ->get();

        return view('assessor.dashboard', compact('stats', 'applicationsToReview', 'documentsToVerify'));
    }
}
