<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'degree',
        'faculty',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    /**
     * Get the applicants for the study program
     */
    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }

    /**
     * Scope a query to only include active study programs
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
