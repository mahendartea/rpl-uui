<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\ApplicantDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class DocumentController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $applicant = $user->applicant;

        if (!$applicant) {
            return redirect()->route('applicant.profile.create')
                ->with('message', 'Silakan lengkapi data profil Anda terlebih dahulu.');
        }

        // Dokumen yang diperlukan
        $requiredDocuments = [
            'ijazah' => [
                'name' => 'Ijazah Terakhir',
                'description' => 'Scan ijazah pendidikan terakhir yang jelas dan berwarna'
            ],
            'transkrip' => [
                'name' => 'Transkrip Nilai',
                'description' => 'Transkrip nilai dengan nilai rata-rata yang tertera jelas'
            ],
            'cv' => [
                'name' => 'Curriculum Vitae',
                'description' => 'CV terbaru dengan pengalaman kerja dan pendidikan'
            ],
            'sertifikat' => [
                'name' => 'Sertifikat Kompetensi/Pelatihan',
                'description' => 'Sertifikat yang relevan dengan program studi yang dipilih'
            ],
            'pengalaman_kerja' => [
                'name' => 'Surat Keterangan Pengalaman Kerja',
                'description' => 'Surat dari perusahaan/instansi tempat bekerja'
            ],
            'foto' => [
                'name' => 'Pas Foto Terbaru',
                'description' => 'Foto formal dengan latar belakang merah/biru'
            ],
            'ktp' => [
                'name' => 'Kartu Tanda Penduduk',
                'description' => 'Scan KTP yang masih berlaku'
            ],
        ];

        // Dokumen yang sudah diupload
        $uploadedDocuments = $applicant->documents()
            ->get()
            ->keyBy('document_type');

        return view('applicant.documents.index', compact(
            'applicant',
            'requiredDocuments',
            'uploadedDocuments'
        ));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $applicant = $user->applicant;

        if (!$applicant) {
            return redirect()->route('applicant.profile.create')
                ->with('error', 'Silakan lengkapi data profil Anda terlebih dahulu.');
        }

        $validated = $request->validate([
            'document_type' => [
                'required',
                'string',
                Rule::in(['ijazah', 'transkrip', 'cv', 'sertifikat', 'pengalaman_kerja', 'foto', 'ktp']),
                Rule::unique('applicant_documents')->where(function ($query) use ($applicant) {
                    return $query->where('applicant_id', $applicant->id);
                })
            ],
            'file' => 'required|file|mimes:pdf,jpg,jpeg,png|max:5120', // 5MB max
            'notes' => 'nullable|string|max:500'
        ], [
            'document_type.unique' => 'Dokumen jenis ini sudah pernah diupload. Silakan hapus yang lama terlebih dahulu.',
            'file.max' => 'Ukuran file maksimal 5MB.',
            'file.mimes' => 'File harus berformat PDF, JPG, JPEG, atau PNG.'
        ]);

        // Upload file
        $file = $request->file('file');
        $filename = $applicant->registration_number . '_' . $validated['document_type'] . '_' . time() . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('applicant-documents', $filename, 'public');

        // Simpan data dokumen
        ApplicantDocument::create([
            'applicant_id' => $applicant->id,
            'document_type' => $validated['document_type'],
            'file_path' => $filePath,
            'original_filename' => $file->getClientOriginalName(),
            'file_size' => $file->getSize(),
            'verification_status' => 'pending',
            'notes' => $validated['notes']
        ]);

        return redirect()->route('applicant.documents.index')
            ->with('success', 'Dokumen berhasil diupload dan sedang menunggu verifikasi.');
    }

    public function destroy(ApplicantDocument $document)
    {
        $user = Auth::user();

        // Pastikan dokumen milik user yang sedang login
        if ($document->applicant->user_id !== $user->id) {
            abort(403, 'Anda tidak memiliki akses untuk menghapus dokumen ini.');
        }

        // Hapus file dari storage
        if (Storage::disk('public')->exists($document->file_path)) {
            Storage::disk('public')->delete($document->file_path);
        }

        // Hapus data dari database
        $document->delete();

        return redirect()->route('applicant.documents.index')
            ->with('success', 'Dokumen berhasil dihapus.');
    }

    public function download(ApplicantDocument $document)
    {
        $user = Auth::user();

        // Pastikan dokumen milik user yang sedang login
        if ($document->applicant->user_id !== $user->id) {
            abort(403, 'Anda tidak memiliki akses untuk mengunduh dokumen ini.');
        }

        if (!Storage::disk('public')->exists($document->file_path)) {
            return redirect()->route('applicant.documents.index')
                ->with('error', 'File tidak ditemukan.');
        }

        return response()->download(
            Storage::disk('public')->path($document->file_path),
            $document->original_filename
        );
    }
}
