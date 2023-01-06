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
                return redirect()->back()->with('message','Comment body is required');
            }

            Comments::create([
                'cpost_id' =>$request->cpost_id,
                'cuser_id' => Auth::user()->getId(),
                'user_comment_name' => $request->user_name,
                'cbody' => $request->comment_bdy

            ]);
            $cmt = new Comments;
            $cmt->cpost_id = $request->cpost_id;
            $cmt->cuser_id = $request->cuser_id;
            $cmt->user_comment_name = $request->user_comment_name;
            $cmt->cbody = $request->cbody;
            
            return redirect('/index')->with('message','Comment posted successfully');
        }
        else{
            redirect()->back()->with('message','Login is Needed');
        }
    }

    public function destroy(Request $request){
        if(Auth::check()){
            $dcomt = Comments::where('id',$request->cmmt_id)->where('cuser_id',Auth::user()->getId())->first();
            $dcomt->delete();

         return response()->json(['status' => 200,'message' => 'Comment Deleted']);
        
        }
        else{
            return response()->json(['status' => 401,'message' => 'Need to Login']);
        }
    }
}