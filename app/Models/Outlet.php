<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;
    protected $table = 'outlet';
    protected $fillable = [
        'otl_code',
        'otl_name',
        'otl_picture',
        'otl_address',
        'otl_contact',
    ];
}
