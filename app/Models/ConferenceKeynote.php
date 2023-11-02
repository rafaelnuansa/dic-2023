<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferenceKeynote extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function conference()
    {
        return $this->belongsTo(Conference::class);
    }

    public function keynote()
    {
        return $this->belongsTo(Keynote::class);
    }
}
