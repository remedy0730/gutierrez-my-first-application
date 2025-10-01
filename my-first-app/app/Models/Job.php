<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // Tell Laravel this model uses the "job_listings" table
    protected $table = 'job_listings';

    // Allow mass assignment on these fields
    protected $fillable = [
        'title',
        'salary',
        'employer_id',
    ];

    /**
     * A Job belongs to an Employer.
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
