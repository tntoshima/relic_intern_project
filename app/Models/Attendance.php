<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;


class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendance';

    protected $fillable =
    [
        'club_id',
        'member_id',
        'date'
    ];
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}