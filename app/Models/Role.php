<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    // Table name is 'role' (Laravel automatically uses plural table names but we specify it manually)
    protected $table = 'roles';

    // Define the fillable columns
    protected $fillable = ['name', 'slug', 'description'];
}
