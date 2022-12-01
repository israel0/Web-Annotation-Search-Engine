<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCenter extends Model
{
    use HasFactory;

    protected $fillable = [
            "data_tithe" ,
            "link",
            "category",
            "content",
            "image"
    ];
}
