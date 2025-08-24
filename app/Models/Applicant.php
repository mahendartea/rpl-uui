<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'registration_number',
        'full_name',
        'place_of_birth',
        'date_of_birth',
        'gender',
        'address',
        'phone_number',
        'graduate_category_id',
        'study_program_id',
        'application_status',
        'motivation',
    ];

    protected function casts(): array
    {
        return [
            'date_of_birth' => 'date',
        ];
    }

    /**
     * Get the user that owns the applicant
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the graduate category for the applicant
     */
    public function graduateCategory()
    {
        return $this->belongsTo(GraduateCategory::class);
    }

    /**
     * Get the study program for the applicant
     */
    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }

    /**
     * Get the documents for the applicant
     */
    public function documents()
    {
        return $this->hasMany(ApplicantDocument::class);
    }

    /**
     * Get the status histories for the applicant
     */
    public function statusHistories()
    {
        return $this->hasMany(ApplicationStatusHistory::class);
    }

    /**
     * Scope a query to filter by application status
     */
    public function scopeStatus($query, $status)
    {
        return $query->where('application_status', $status);
    }
}
