<?php

namespace App\Models;

use App\Models\User;
use App\Models\Favori;
use App\Models\Comment;
use App\Models\Category;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','category_id','name','description','defaultImage','carouselImage','price'];
    protected $casts = ['carouselImage' => 'array',];

    public function user():BelongsTo 
    {
        return  $this->belongsTo(User::class);
    }

    public function category():BelongsTo 
    {
        return  $this->belongsTo(Category::class);
    }
    public function favoris():HasMany 
    {
        return  $this->hasMany(Favori::class);
    }

    public function comments():HasMany 
    {
        return  $this->hasMany(Comment::class);
    }

}
