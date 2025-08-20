<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationStatusHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'status',
        'notes',
        'changed_by',
    ];

    /**
     * Get the applicant that owns this status history
     */
    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }

    /**
     * Get the user who changed the status
     */
    public function changedBy()
    {
        return $this->belongsTo(User::class, 'changed_by');
    }

    /**
     * Scope a query to filter by status
     */
    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }
}
