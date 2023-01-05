<!DOCTYPE html>
<html>
    <title>Browse</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @foreach($post_image as $item)
<style>
    
       body{
        background:#000000;
        font-size:16px;
         height:auto;
         background-image: linear-gradient(rgba(14, 13, 13, 0.712),#000000);
       }
       #container{
                    
                    /* background:none; */
                    color:white;
                    box-align: center;
                    margin:15px auto;
                    overflow:auto;
                    padding:15px;
                    width: 20%;                
            }
          
            textarea{
                width: 95%;
            }

            
        
            h2{
                text-align: center;
                color: aliceblue;
                
            }
            h3{
                text-align: center;
                color: aliceblue;
                font-size: 16px;
            }

            
            footer{
                text-align:center;
                border:rgb(10, 10, 10) dashed 1.2px;
                color:#ee0404;
                box-align: center;
                    margin:0px 0px 0px 510px;
                    padding:5px;
                    width: 25%;
                    font-size: 18px;
                    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
              
                
            }
            .pagination {
            display:flex;
            width: auto;
            list-style-type: none;
            
            }

            .pagination a {
            color: rgb(255, 1, 1);
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid #4CAF50;
            margin: 0 4px;
            transition: background-color .2s;
            box-align: center;
            }

            .pagination a.active {
            background-color: #ff0101;
            color: rgb(12, 11, 11);
            border: 1px solid #06e9e9;
            }

            .pagination a:hover:not(.active) {
                background-color: #000000;
            }
            h1{
                text-align: center;
                color: #04eee2;
                
                text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
            }
            .tt {
            float: left;
            }

            .tt a {
            display: block;
            color: rgb(236, 233, 247);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            }

            .tt a:hover:not(.trigger) {
            background-color: rgb(7, 247, 255);
            }
            .st{
                color: rgb(6, 247, 206);
                padding: 0px 50px;
               
            }
            .lt {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgb(8, 8, 8);
            background-image: linear-gradient(rgb(241, 16, 8),#111111);
            }
          /* sytle*/
          .card{
	
            background-image: linear-gradient(rgb(161, 10, 10),#111111);
                border: none;
            }

            .form-color{
            
                background-image: linear-gradient(rgba(241, 16, 8, 0.692),#111111);

            }

            .form-control{

                height: 90px;
                border-radius: 25px;
                width: 600px;
            }

            .form-control:focus {
                color: #495057;
                background-color: rgb(236, 234, 234);
                border-color: #00ffd0;
                outline: 0;
                box-shadow: none;
                text-indent: 10px;
            }

            .c-badge{
                background-color: #0c0c0c;
                color: rgb(255, 5, 5);
                height: 20px;
                font-size: 21px;
                width: 192px;
                border-radius: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 2px;
            }

            .comment-text{
                font-size: 23px;
                color:#fff;
            }

          


            .user-feed{

                    font-size: 14px;
                    margin-top: 12px;
            }
                  
            
            .submit{
                transition-duration: 0.4s;
                background-color: white; /* Green */
                border: none;
                color: black;
                padding: 10px 22px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                transition-duration: 0.4s;
                cursor: pointer;
                border: 2px solid #b32d00;
            }

            .submit:hover {
                background-color: #fa490e;
                color: black;
            }
            .ct {
            display: table;
            width: 100%;
            }
            .table-row {
            
            display: table-row;
            height: 100px;
            }
            .table-cell {
            
            background: #080808;
            background-image: linear-gradient(rgb(0, 0, 0),#111111);
            display: table-cell;
            padding: 5px;
            width: 600px;
            height: 100px;
            color: antiquewhite;
            }
            .table-cell2 {
            
            background: #141414;
            background-image:linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
            display: table-cell;
            padding: 5px;
            width: 700px;
            height: 300px;
            color: antiquewhite;
            }
            .titles{
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-size:40px;
                color: #ffffff;
                text-shadow: 2px 2px 5px rgb(255, 9, 9);
            }
            .para{
                text-align:inherit;
            }
            .errors{
                color: rgb(0, 195, 255);
                text-shadow: 2px 2px 5px rgb(255, 9, 9);
            }
            .sec{
                color: white;
            }
            .mt-2{
                border: #00fff2 2px solid;
                background-image:linear-gradient(to right, rgba(255, 0, 0, 0), rgb(0, 0, 0));
            }
                    
        </style>
        <body>
            @if (Auth::check())
            
                <nav>
                    <ul class="lt">
                        <li class="tt"><a href="{{ url('/') }}">Home</a></li>
                        <li class="tt"><a href="{{ url('/post/create')}}">Upload a Song</a></li>
                        <li class="tt" style="float:right"><a class="trigger" href="{{ route('logout') }}"class="ml-4 text-arial text-indigo-800 ">Logout</a></li>
                        <br>
                        <li class="st" style="float:right"> Logged In as : {{ Auth::user()->name }}</li>
                    </ul>
                    </nav>
                   
                    <br>
                    
                <div class="ct">
                    <div class="table-row">
                     <div class="table-cell">
                        <h4 class="titles">{{$item->title}}</h4>
                    
                        <img src="/Images/{{$item->pics}}" width="300" height="250"/>
                        <br>
                        <audio controls>
                            <source src="/Audio/{{($item->audio)}}" type="audio/mpeg"width="200" height="200">
                        </audio>
    
                        
                     </div>
                     <div class="table-row">
                      <div class="table-cell2">
                        <h4>{{$item->message}}</h4>
                        <p class="para">
                            Posted By -> {{$item->user_post_name}}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                @endif
                @endforeach
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <footer> 
                    <span>            
                        {{$post_image->links()}}
                    </span>
                </footer>
                

            <div class="container mt-5 mb-5">

                <div class="row height d-flex justify-content-center align-items-center">
    
                  <div class="col-md-7">
    
                    <div class="card">
    
                      <div class="p-3">
    
                        <h1>Comments</h1>
                        
                      </div>
                      
                      <div class="errors">
                        @if(session('Note'))
                            <h5>** {{session('Note')}} **</h5>
                            @endif
                        </div>
                      <div class="mt-3 d-flex flex-row align-items-center p-3 form-color">

                        <form action = "{{url('comments')}}"  id="commentform" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="cpost_id" id="cpost_id" value={{$item->id}}>
                            <input type="hidden" name="cuser_id" id="cuser_id" value={{Auth::user()->getId()}}>
                            <input type="hidden" name="user_name" id="user_name" value={{Auth::user()->name}}>
                            <textarea class="form-control" placeholder="Enter your comment..." name="comment_bdy" id="comment_bdy" msg cols="30" rows="5" required></textarea>
                            <button type="submit" id="ajsub"> Submit </button>
                        </form>    
                      </div>
    
                
                      @foreach($comments as $it)
                      {{-- {{$loop->iteration}} --}}
                      @if($item->id === $it->cpost_id)
                      <div class="mt-2 displaycomment">
    
                        <div class="d-flex flex-row p-3">
    
                          <img src="/Images/{{$item->pics}}"width="60" height="60" class="rounded-circle mr-3">
    
                          <div class="w-100">
    
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row align-items-center">
                                  <span class="c-badge">{{$it->user_comment_name}}</span>
                                </div>
                                <small class="sec">Commented On {{$it->created_at}}</small>
                          </div>
                          <br>
                          <p class="text-justify comment-text mb-0">{{$it->cbody}}</p>
                          </div>
                                <!-- To check Role -->
                        @if(Auth::user()->getId() === 1)
                          <div>
                            {{-- <a herf="" class="btn btn-primary btn-sm me-2" >Edit</a> --}}
                            <button type="button" value="{{$it->id}}" class=" destroy btn btn-danger btn-sm me-2">Delete</button>
                          </div>
                          @elseif (Auth::user()->getId() === $it->cuser_id)
                          <div>
                            {{-- <a herf="" class="btn btn-primary btn-sm me-2" >Edit</a> --}}
                            <button type="button" value="{{$it->id}}" class=" destroy btn btn-danger btn-sm me-2">Delete</button>
                          </div>
                          @endif
                        </div>    
                      </div>
                      @endif
                    @endforeach
                    </div>
                    
                  </div>
                  
                </div>
                </div>
                
              </div>
        </body> 
        <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
            </script>
        <script>
             $('#commentform' ).submit(function( e ) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            $.ajax( {
            url: '{{ url('comments')}}',
            type: 'POST',
            data: new FormData( this ),
            processData: false,
            contentType: false,
            success: function(result){
                console.log(result);
            }
        } );
        e.preventDefault();
    } 
);
            
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $(document).on('click','.destroy',function(){
                    if(confirm('Confirm Delete comment?')){
                        var press = $(this);
                        var cmmt_id = press.val();
                        $.ajax({
                                url: '{{ url('deletecmts')}}',
                                type: 'POST',
                                data: {
                                    'cmmt_id' : cmmt_id
                                },
                                success: function(resp){
                                    if(resp.status== 200){
                                        press.closest('.displaycomment').remove();
                                        alert(resp.message);
                                    }else{
                                        alert(resp.message);
                                    }
            }

                        });

                    }
                });
            });
        </script>                
        
</html>
