<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fencerail extends Model
{
  protected $fillable = [
    'project_number', 'image', 'image_title', 'image_title2'
  ];
}
