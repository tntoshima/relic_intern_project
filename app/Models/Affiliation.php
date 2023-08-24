<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;

class Affiliation extends Model
{
    use HasFactory;

    protected $table = 'affiliation';

    protected $fillable =
    [
        'club_id',
        'member_id',
        'role'
    ];
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
    
}