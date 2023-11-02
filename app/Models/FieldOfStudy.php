<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FieldOfStudy extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function conferences(): BelongsToMany
    {
        return $this->belongsToMany(Conference::class, 'conference_field_of_studies');
    }
}
