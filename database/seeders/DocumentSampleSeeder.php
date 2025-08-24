<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Applicant;
use App\Models\ApplicantDocument;
use App\Models\Assessor;

class DocumentSampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $applicants = Applicant::all();
        $assessors = Assessor::all();

        $documentTypes = [
            [
                'document_name' => 'Ijazah S1',
                'document_type' => 'ijazah',
                'file_path' => 'documents/ijazah_s1.pdf'
            ],
            [
                'document_name' => 'Transkrip Nilai',
                'document_type' => 'transkrip',
                'file_path' => 'documents/transkrip.pdf'
            ],
            [
                'document_name' => 'Curriculum Vitae',
                'document_type' => 'cv',
                'file_path' => 'documents/cv.pdf'
            ],
            [
                'document_name' => 'Sertifikat Kompetensi',
                'document_type' => 'sertifikat',
                'file_path' => 'documents/sertifikat_kompetensi.pdf'
            ],
            [
                'document_name' => 'Surat Pengalaman Kerja',
                'document_type' => 'pengalaman_kerja',
                'file_path' => 'documents/pengalaman_kerja.pdf'
            ],
            [
                'document_name' => 'Portofolio Karya',
                'document_type' => 'portofolio',
                'file_path' => 'documents/portofolio.pdf'
            ],
            [
                'document_name' => 'Surat Rekomendasi',
                'document_type' => 'rekomendasi',
                'file_path' => 'documents/surat_rekomendasi.pdf'
            ]
        ];

        foreach ($applicants as $applicant) {
            // Create random documents for each applicant
            $numDocuments = fake()->numberBetween(3, 6); // Random number of documents
            $selectedTypes = fake()->randomElements($documentTypes, $numDocuments);

            foreach ($selectedTypes as $docType) {
                ApplicantDocument::create([
                    'applicant_id' => $applicant->id,
                    'document_name' => $docType['document_name'],
                    'document_type' => $docType['document_type'],
                    'file_path' => 'applicant-documents/' . $applicant->registration_number . '_' . $docType['document_type'] . '.pdf',
                    'verification_status' => fake()->randomElement(['pending', 'accepted', 'rejected']),
                    'assessor_notes' => fake()->optional(0.4)->sentence(),
                    'assessor_id' => fake()->optional(0.6)->randomElement($assessors->pluck('id')->toArray()),
                    'verified_at' => fake()->optional(0.5)->dateTimeBetween('-2 weeks', 'now'),
                ]);
            }
        }
    }
}
