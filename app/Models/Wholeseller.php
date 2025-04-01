<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wholeseller extends Model
{
    use HasFactory;
    // Table name is 'wholesellers' (Laravel automatically uses plural table names but we specify it manually)
    protected $table = 'wholesellers';

    // Define the fillable columns
    protected $fillable = ['name', 'email'];
}
