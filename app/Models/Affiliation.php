<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}