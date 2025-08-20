<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'document_name',
        'document_type',
        'file_path',
        'verification_status',
        'assessor_notes',
        'assessor_id',
        'verified_at',
    ];

    protected function casts(): array
    {
        return [
            'verified_at' => 'datetime',
        ];
    }

    /**
     * Get the applicant that owns the document
     */
    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }

    /**
     * Get the assessor that verified this document
     */
    public function assessor()
    {
        return $this->belongsTo(Assessor::class);
    }

    /**
     * Get the assessments for this document
     */
    public function assessments()
    {
        return $this->hasMany(DocumentAssessment::class);
    }

    /**
     * Scope a query to filter by verification status
     */
    public function scopeStatus($query, $status)
    {
        return $query->where('verification_status', $status);
    }

    /**
     * Scope a query to only include verified documents
     */
    public function scopeVerified($query)
    {
        return $query->where('verification_status', 'accepted');
    }

    /**
     * Scope a query to only include pending documents
     */
    public function scopePending($query)
    {
        return $query->where('verification_status', 'pending');
    }
}
