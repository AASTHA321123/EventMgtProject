<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = ['name','description', 'price', 'capacity'];

    public function reviews()
{
    return $this->hasMany(Review::class);
}

public function averageRating()
{
    return $this->reviews()->avg('rating') ?? 0;
}
 




public function getAverageRatingAttribute()
{
    return $this->reviews()->avg('rating') ?? 0;
}

public function getReviewCountAttribute()
{
    return $this->reviews()->count();
}

}

