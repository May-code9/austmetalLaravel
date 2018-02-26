<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handrail extends Model
{
  protected $fillable = [
    'project_number', 'image', 'image_title', 'image_title2'
  ];
}
