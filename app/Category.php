<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
      'category_id',
      'title',
      'description',
      'created_at',
      'updated_at'
    ];
}
