<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliation extends Model
{
    use HasFactory;

    protected $table = 'affilation';

    protected $fillable = 
    [
        'id',
        'club_id',
        'member_id',
        'role'
    ];
}
