<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostImage;
class Comments extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $primaryKey = 'id';
    protected $fillable = ['cbody','cuser_id','cpost_id','user_comment_name'];

    public function PostComment()
    {
        return $this->belongsTo(PostImage::class, 'post_id','cpost_id');
    }
}
        
