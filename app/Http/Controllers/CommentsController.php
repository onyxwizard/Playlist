<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
class CommentsController extends Controller
{
  
    public function store(Request $request){
        if(Auth::check()){
            $validator = Validator::make($request->all(), [
                'cbody' => 'string'
            ]);
            if($validator->fails()){ 
                return redirect()->back()->with('Note','Comment body is required');
            }

            Comments::create([
                'cpost_id' =>$request->cpost_id,
                'cuser_id' => Auth::user()->getId(),
                'user_comment_name' => $request->user_name,
                'cbody' => $request->comment_bdy

            ]);
            return redirect('/index')->with('Note','Comment posted successfully');
        }
        else{
            redirect()->back()->with('Note','Login is Needed');
        }
    }
}
