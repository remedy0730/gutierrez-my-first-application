<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    // Allow mass assignment on the name field
    protected $fillable = ['name'];

    /**
     * An employer can have many jobs.
     */
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
