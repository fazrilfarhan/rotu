<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    public $table = "equipments";

    protected $fillable = [
        'equipName',
        'quantity',
    ];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function cadets()
    {
        return $this->belongsToMany(Cadet::class, 'applications')->withPivot(['status'])->withTimestamps();
    }
}
