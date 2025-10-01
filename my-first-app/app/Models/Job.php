<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';

    // Each Job belongs to an Employer
    public function employer()
    {
        return $this->belongsTo(\App\Models\Employer::class);
    }

    // Each Job can have many Tags (many-to-many)
    public function tags()
    {
        return $this->belongsToMany(\App\Models\Tag::class, 'job_listing_tag', 'job_listing_id', 'tag_id');
    }
}
