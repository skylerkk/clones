<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Authors extends Model
{
    use HasFactory;
    protected $table = 'authors';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
}
