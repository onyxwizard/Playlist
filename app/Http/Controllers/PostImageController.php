<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PostImage;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
// use App\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\CommentsController;
use App\Models\Comments;
use Datatables;
use Illuminate\Support\Facades\Input;
class PostImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // paginate(3)
        $post_image = PostImage::all();
        return view('poster.main')->with('post_image',$post_image);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('poster.upload');
    }


    public function showup()
    {
        Paginator::useBootstrap();
        
           
        $comments = Comments::all();
        $post_image = PostImage::simplePaginate(1);
        if(!$post_image->isEmpty()){
           
            return view('poster.index')->with('post_image',$post_image)->with('comments',$comments);
        }else{
            return redirect('/main')->with('post_image',$post_image)->with('message','No Post and Comments to Display');
        }

        
    }

    public function viewup($cmtid)
    {

        $comments = Comments::all();
        $post_image = PostImage::all();
        return view('comment.view')->with('post_image',$post_image)->with('comments',$comments)->with('cmtid',$cmtid);
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:15|min:2',
            'message' => 'required|max:500|min:2',
            'pics' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5024|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'audio' => 'nullable|mimes:audio/mpeg,mpga,mp3,wav,aac',  ]);
        if ($validator->fails()) {
            return redirect('post')
                        ->withErrors($validator)
                        ->withInput();
        }
        $requestDt = $request->all();
        if($request->hasFile('audio')){
            $areq = $request->file('audio');
            $uniqueid=uniqid();
            $original_name=$areq->getClientOriginalName();
            $size=$areq->getSize();
            $extension=$areq->getClientOriginalExtension();
            $fullname=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
            $u_path= 'Audio/';
            $audio_url=$u_path.$fullname;
            $store=$areq->move($u_path,$original_name);
            $requestDt['audio'] = $original_name;
           }
        $iName = time().'.'.$request->pics->getClientOriginalName();
        $req = $request->file('pics');
        $image_name= $req->getClientOriginalName();
        $ext=strtolower($req->getClientOriginalExtension());
        $image_full_name=$image_name;
        $upload_path= 'Images/';
        $image_url=$upload_path.$image_full_name;
        $success=$req->move($upload_path,$image_full_name);
        $dt['pics']=$image_full_name;
        $requestDt['pics'] = $image_full_name;
        $user_id = Auth::user()->getId();
        $user_post_name = Auth::user()->getName();
        $requestDt['post_id'] = $user_id;
        $requestDt['user_post_name'] = $user_post_name;
        PostImage::create($requestDt);
        return redirect('/post')->with('Message','Posted');     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cmtid)
    {
        $comments = Comments::all();
        $post_image = PostImage::all();
        return view('comment.view')->with('post_image',$post_image)->with('comments',$comments)->with('cmtid',$cmtid);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = PostImage::find($id);
        return view('poster.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updates = PostImage::find($id);
        $updates->title = $request->input('title');
        $updates->message = $request->input('message');
        
        if($request->hasFile('pics'))
        {
            $dst = 'Images/'.$updates->pics;
            if(File::exists($dst)){
                File::delete($dst);
            }
        $req = $request->file('pics');

        $image_name= $req->getClientOriginalName();
        $ext=strtolower($req->getClientOriginalExtension());

        $image_full_name=$image_name;
        $upload_path= 'Images/';
        $image_url=$upload_path.$image_full_name;
        $success=$req->move($upload_path,$image_full_name);
        $dt['pics']=$image_full_name;
        $updates->pics = $image_full_name;
        }

        if($request->hasFile('audio')){
            $dst = 'Audio/'.$updates->audio;
                if(File::exists($dst)){
                    File::delete($dst);
                }
            $file = $request->file('audio');
            $uniqueid=uniqid();
            $original_name=$file->getClientOriginalName();
            $size=$file->getSize();
            $extension=$file->getClientOriginalExtension();
            $fullname=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
            $u_path= 'Audio/';
            $audio_url=$u_path.$fullname;
            $updates['audio']=$file->move($u_path,$original_name);
            $updates->audio = $original_name;
           }
        $updates->update();
        return redirect('/main')->with('message','Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if(Auth::check()){
            $dpost = PostImage::where('id',$request->postt_id)->where('user_post_name',Auth::user()->name)->first();
            $dpost->delete();

         return response()->json(['status' => 200,'message' => 'Post Deleted']);
        
        }
        else{
            return response()->json(['status' => 401,'message' => 'Need to Login']);
        }
    }

    
}
