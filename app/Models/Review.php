<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'rating', 'user_id', 'package_id'];

    public function user()
{
    return $this->belongsTo(User::class);
}

public function package()
{
    return $this->belongsTo(Package::class);
}
}
