<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class PostImage extends Model
{
    use HasFactory;
    protected $table = 'post_image';
    protected $primaryKey = 'id';
    protected $fillable = ['title','message','pics','audio','post_id','user_post_name'];

    public function users()
    {
        return $this->belongsTo(User::class, 'post_id','id');
    }
}
