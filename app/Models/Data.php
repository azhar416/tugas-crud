<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'data';
    protected $fillable =
    [
        'foto_path',
        'fname',
        'lname',
    ];
    use HasFactory;
}
