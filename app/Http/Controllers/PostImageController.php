<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostImage;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class PostImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post_image = PostImage::paginate(2);
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
            'audio' => 'nullable|mimes:audio/mpeg,mpga,mp3,wav,aac',
            
        ]);
 
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
            // $audiopath=url('/storage/upload/files/Audio/'.$filename);
            // $path=$request->file('audio')->storeAs('public/files/Audio/',$filename);
            // $all_audios=$audiopath;
           }
        
        $iName = time().'.'.$request->pics->getClientOriginalName();
       
        
        $req = $request->file('pics');

      $image_name= $req->getClientOriginalName();
      $ext=strtolower($req->getClientOriginalExtension());
    //   .'.'.$ext
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


        // $requestDt['pics'] = $PATH;
        PostImage::create($requestDt);
        // $Faudio = $request->file('audio')->getClientOriginalName();
        // $apath =$request->file('audio')->storeAs('/public/Audio/', $Faudio,'public');
        // $requestAt['audio'] = '/storage/'.$apath;
       
        
        return redirect('/post')->with('Alert Message','Posted');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
