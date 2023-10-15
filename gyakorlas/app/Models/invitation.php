<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invitation extends Model
{
    use HasFactory;

    protected $primaryKey = "invitation_id";

    protected $fillable = [
        'appeared',
        'event_id',
        'user_id',
    ];
}
