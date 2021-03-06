<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'cover_image',
        'title',
        'slug',
        'body',
        'meta_description',
        'published_at',
        'featured',
        'author_id',
        'category_id',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id')->withDefault('Dirga Astya');
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    } 

    public function tags():BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }
}
