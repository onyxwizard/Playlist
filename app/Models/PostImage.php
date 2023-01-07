<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comments;
class PostImage extends Model
{
    use HasFactory;
    protected $table = 'post_image';
    protected $primaryKey = 'id';
    protected $fillable = ['title','message','pics','audio','post_id','user_post_name'];

    public function Users()
    {
        return $this->belongsTo(User::class, 'post_id','id');
    }

    public function CommentPost()
    {
        return $this->hasMany(Comments::class, 'post_id','cuser_id');
    }
}
