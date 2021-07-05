<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'trainerRank',
        'trainerName',
        'trainerNum',
    ];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
