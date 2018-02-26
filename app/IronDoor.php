<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IronDoor extends Model
{
  protected $table = 'irondoors';

  protected $fillable = [
    'project_number', 'image', 'image_title', 'image_title2'
  ];
}
