<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'employee_id',
        'full_name',
        'expertise_area',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    /**
     * Get the user that owns the assessor
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the applicant documents verified by this assessor
     */
    public function verifiedDocuments()
    {
        return $this->hasMany(ApplicantDocument::class);
    }

    /**
     * Get the document assessments made by this assessor
     */
    public function assessments()
    {
        return $this->hasMany(DocumentAssessment::class);
    }

    /**
     * Scope a query to only include active assessors
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
