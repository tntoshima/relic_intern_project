<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Affiliation;
use App\Models\Member;

class Club extends Model
{
    use HasFactory;

    protected $table = 'clubs';

    protected $fillable =
    [
        'location_name',
        'name',
    ];
    public function affiliations()
    {
        return $this->hasMany(Affiliation::class);
    }

    public function members()
    {
        // return $this->hasManyThrough(Member::class, Affiliation::class);
        return $this->belongsToMany(Member::class, 'affiliation', 'club_id', 'member_id');
    }
}