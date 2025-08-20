<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentAssessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_document_id',
        'assessor_id',
        'score',
        'comments',
        'recommendation',
    ];

    /**
     * Get the applicant document being assessed
     */
    public function applicantDocument()
    {
        return $this->belongsTo(ApplicantDocument::class);
    }

    /**
     * Get the assessor who made this assessment
     */
    public function assessor()
    {
        return $this->belongsTo(Assessor::class);
    }

    /**
     * Scope a query to filter by recommendation
     */
    public function scopeRecommendation($query, $recommendation)
    {
        return $query->where('recommendation', $recommendation);
    }

    /**
     * Scope a query to filter by minimum score
     */
    public function scopeMinScore($query, $score)
    {
        return $query->where('score', '>=', $score);
    }
}
