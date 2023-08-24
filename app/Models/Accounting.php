<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounting extends Model
{
    use HasFactory;

    protected $table = 'accounting';

    protected $fillable =
    [
        'club_id',
        'term',
        'monthly_fee',
        'space_cost',
        'fixture_cost',
        'insurance_cost',
        'subsidy',
    ];
}
