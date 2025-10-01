<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    /**
     * An employer can have many jobs.
     *
     * This is the one-to-many relationship:
     * Employer hasMany Jobs -> Job belongsTo Employer
     */
    public function jobs()
    {
        return $this->hasMany(\App\Models\Job::class);
    }
}
    