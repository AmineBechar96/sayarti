<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table="ratings";
    protected $fillable=[
        'user_id',
        'user_name',
        'service_type',
        'service_rated_id',
        'number_of_starts',
        'review'
    ] ;
}
