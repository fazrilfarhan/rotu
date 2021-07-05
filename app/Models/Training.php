<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = [
        'level',
        'trainingName',
        'year',
        'startDate',
        'endDate'
        
    ];

    public function cadets()
    {
        return $this->belongsToMany(Cadet::class, 'registrations')->withPivot('dateIn', 'dateOut');
    }
    
}
