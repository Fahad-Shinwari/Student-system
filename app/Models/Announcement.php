<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
     // Table Name
     protected $table='announcement';
     //Primary Key
     public $primaryKey = 'id';
     // Time stamps
     public $timestamps = 'true';
}
