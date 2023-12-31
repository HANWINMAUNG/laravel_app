<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'description',
        'category_id'
    ];
    public function Category(){
        
        return $this->belongsTo(Category::class);
    }
}
