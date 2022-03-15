<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $fillable = [
        'category_name',
        'status'
    ];
}
