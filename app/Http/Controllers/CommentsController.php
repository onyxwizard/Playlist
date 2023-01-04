<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
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
