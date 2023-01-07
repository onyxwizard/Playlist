<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostImage;
use App\Models\User;
class Comments extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $primaryKey = 'id';
    protected $fillable = ['cbody','cuser_id','cpost_id','user_comment_name'];

    public function PostComment()
    {
        return $this->belongsTo(PostImage::class, 'post_id','cuser_id');
    }
    public function User()
    {
        return $this->belongsTo(User::class,  'cpost_id','id');
    }
}
        
