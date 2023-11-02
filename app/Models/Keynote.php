<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keynote extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function conferences()
    {
        return $this->belongsToMany(Conference::class, 'conference_keynotes');
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/keynotes/' . $value),
        );
    }
}
