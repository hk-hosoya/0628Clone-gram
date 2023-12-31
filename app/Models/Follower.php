<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;

    protected $primaryKey = [
        'user_id',
        'followed_id'
    ];
    protected $fillable = [
        'user_id',
        'followed_id'
    ];
    public $timestamps = false;
    public $incrementing = false;
}
