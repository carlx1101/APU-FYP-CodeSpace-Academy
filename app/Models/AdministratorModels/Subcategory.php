<?php

namespace App\Models\AdministratorModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'status'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
