<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;

    protected $table = 'kasirs';
    protected $primarykey = 'idkasirs';
    
    public $incrementing = false;
    public $timestamps = true;
    
}
