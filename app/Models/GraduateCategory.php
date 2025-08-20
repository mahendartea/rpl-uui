<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraduateCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'description',
    ];

    /**
     * Get the applicants for the graduate category
     */
    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }
}
