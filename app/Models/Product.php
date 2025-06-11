<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Product extends Model
{
    use  HasFactory;
protected $guarded = []; // Use guarded to allow mass assignment for all fields


    // protected $fillable = [
    //     'title',
    //     'category',
    //     'price',
    // ];

  
}
