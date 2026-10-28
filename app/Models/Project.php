<?php

// app/Models/Project.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'cover_image', 'project_date'];

    protected $casts = [
        'project_date' => 'date',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(ProjectImage::class);
    }
}