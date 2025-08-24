<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\StudyProgram;
use App\Models\GraduateCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $applicant = $user->applicant;

        if (!$applicant) {
            return redirect()->route('applicant.profile.create');
        }

        return view('applicant.profile.show', compact('applicant'));
    }

    public function create()
    {
        $user = Auth::user();

        // Jika sudah ada data applicant, redirect ke edit
        if ($user->applicant) {
            return redirect()->route('applicant.profile.edit');
        }

        $studyPrograms = StudyProgram::all();
        $graduateCategories = GraduateCategory::all();

        return view('applicant.profile.create', compact('studyPrograms', 'graduateCategories'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        // Validasi jika sudah ada data applicant
        if ($user->applicant) {
            return redirect()->route('applicant.profile.edit')
                ->with('error', 'Data profil sudah ada. Silakan gunakan fitur edit.');
        }

        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'place_of_birth' => 'required|string|max:100',
            'date_of_birth' => 'required|date|before:today',
            'gender' => 'required|in:male,female',
            'address' => 'required|string|max:500',
            'phone_number' => 'required|string|max:20',
            'study_program_id' => 'required|exists:study_programs,id',
            'graduate_category_id' => 'required|exists:graduate_categories,id',
            'motivation' => 'nullable|string|max:1000',
        ]);

        // Generate registration number
        $registrationNumber = 'RPL-' . date('Y') . '-' . str_pad(
            Applicant::whereYear('created_at', date('Y'))->count() + 1,
            4,
            '0',
            STR_PAD_LEFT
        );

        $validated['user_id'] = $user->id;
        $validated['registration_number'] = $registrationNumber;
        $validated['application_status'] = 'draft';

        Applicant::create($validated);

        return redirect()->route('applicant.dashboard')
            ->with('success', 'Data profil berhasil disimpan. Nomor pendaftaran Anda: ' . $registrationNumber);
    }

    public function edit()
    {
        $user = Auth::user();
        $applicant = $user->applicant;

        if (!$applicant) {
            return redirect()->route('applicant.profile.create');
        }

        $studyPrograms = StudyProgram::all();
        $graduateCategories = GraduateCategory::all();

        return view('applicant.profile.edit', compact('applicant', 'studyPrograms', 'graduateCategories'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $applicant = $user->applicant;

        if (!$applicant) {
            return redirect()->route('applicant.profile.create');
        }

        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'place_of_birth' => 'required|string|max:100',
            'date_of_birth' => 'required|date|before:today',
            'gender' => 'required|in:male,female',
            'address' => 'required|string|max:500',
            'phone_number' => 'required|string|max:20',
            'study_program_id' => 'required|exists:study_programs,id',
            'graduate_category_id' => 'required|exists:graduate_categories,id',
            'motivation' => 'nullable|string|max:1000',
        ]);

        $applicant->update($validated);

        return redirect()->route('applicant.profile.show')
            ->with('success', 'Data profil berhasil diperbarui.');
    }
}
