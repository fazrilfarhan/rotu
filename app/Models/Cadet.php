<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadet extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cadetID',
        'cadetRank',
        'cadetName',
        'cadetGender',
        'phoneNum',
        'cadetAddress',
    ];

    public function trainings()
    {
        return $this->belongsToMany(Training::class, 'registrations')->withPivot('dateIn', 'dateOut');
    }
    
    public function equipments()
    {
        return $this->belongsToMany(Equipment::class, 'applications')->withPivot('status')->withTimestamps();
    }

    public function pending()
    {
        return $this->belongsToMany(Equipment::class, 'applications')->withTimestamps()
            ->withPivot('status')
            ->wherePivot('status', 'PENDING');
    }

    public function approved()
    {
        return $this->belongsToMany(Equipment::class, 'applications')->withTimestamps()
            ->withPivot('status')
            ->wherePivot('status', 'APPROVED');
    }

    public function returned()
    {
        return $this->belongsToMany(Equipment::class, 'applications')->withTimestamps()
            ->withPivot('status')
            ->wherePivot('status', 'RETURNED');
    }

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
