<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Checkout extends Model
{
    use HasFactory;
    protected $table = 'checkouts';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    public function books(){
        return $this->belongsTo(Book::class, 'id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'id');
    }
}
