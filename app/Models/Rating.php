<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'rating';

    protected $fillable = [
        'rating',
        'komentar',
        'user_id',
        'film_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function film()
    {
        return $this->belongsTo(Film::class,'film_id');
    }


}
