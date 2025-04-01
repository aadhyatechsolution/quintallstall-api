<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // Table name is 'cateogry' (Laravel automatically uses plural table names but we specify it manually)
    protected $table = 'categories';

    // Define the fillable columns
    protected $fillable = ['name', 'description'];
}
