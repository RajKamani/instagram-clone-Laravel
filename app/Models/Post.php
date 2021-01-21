<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['caption', 'image_path'];


    public function like($user = null, $liked = true) //Creating Or Updating Like in DB
    {
        if (($liked && $this->IsLikedBy($user))) {
            $this->DeleteLike($user);
        } else {
            $this->likes()->updateOrCreate([
                'user_id' => $user ? $user->id : auth()->id(),
            ], [
                    'likes' => $liked
                ]
            );
        }
    }

    public function IsLikedBy(User $user) //checking Particular tweet is liked by given user
    {
        return (bool)$user->likes->where('post_id', $this->id)->where('likes', true)->count();
    }

    public function DeleteLike(User $user)
    {
        $like = $user->likes->where('post_id', $this->id)->first();
        $like->delete();
    }

    function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function totalLikes()
    {
        return $this->likes->pluck('post_id')->count();
        /*return $this->likes->where('post_id', $this->id)->pluck('p')->count();*/
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
