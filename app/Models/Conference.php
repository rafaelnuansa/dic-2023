<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Conference extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/conferences/' . $value),
        );
    }
    
    public function keynotes(): BelongsToMany
    {
        return $this->belongsToMany(Keynote::class, 'conference_keynotes');
    }
    
    public function fieldOfStudies(): BelongsToMany
    {
        return $this->belongsToMany(FieldOfStudy::class, 'conference_field_of_studies');
    }

}
