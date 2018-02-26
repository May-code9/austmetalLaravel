<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WindowBurglary extends Model
{
  protected $table = 'windowburglaries';

  protected $fillable = [
    'project_number', 'image', 'image_title', 'image_title2'
  ];
}
