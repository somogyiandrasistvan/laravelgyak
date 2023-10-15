<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organisators extends Model
{
    use HasFactory;

    protected $primaryKey = "org_id";

    protected $fillable = [
        'name',
        'description'
    ];
}
