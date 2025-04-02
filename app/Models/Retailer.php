<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
    use HasFactory;
    // Table name is 'retailers' (Laravel automatically uses plural table names but we specify it manually)
    protected $table = 'retailers';

    // Define the fillable columns
    protected $fillable = ['name', 'email'];
}
