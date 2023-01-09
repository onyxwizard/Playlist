<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Playlist</title>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src=”https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js”></script>


        <!-- Theme lib -->
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">

            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html{
                line-height:1.15;-webkit-text-size-adjust:100%
            }
            body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}

            body{
                
                background:#1f1e1e;
                font-size:16px;
                height:auto;
                background-image: linear-gradient(black,#b30000);
                
            }

            #container{
                    
                    background:black;
                    color:white;
                    width:90%;
                    margin:35px auto;
                    overflow:auto;
                    padding:30px;
                    font-size:20px;
                    font-family:Arial, Helvetica, sans-serif;
            }

            header{
                text-align:center;
                border:red dashed 1.9px;
                color:#00ff00;
                padding:5px;
            }

            

            h1{
                text-align:left;
                border:rgb(255, 0, 0) dashed 1.9px;
                color:#00ff00;
                padding:5px;
               
            }


            footer{
                text-align:center;
                border:rgb(255, 1, 1) dashed 1.9px;
                color:#0e0f16;
                padding:5px;
                
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

            #rt h3{
                background:#b32d00;
                padding:10px;
                margin:10px 0;
            }
            

            #results span{
                color:rgb(255, 8, 8);
                font-weight:bold;
            }
            
            .heading-box  h2{ width:100%; color: red; }
            .text-box {
                position: absolute;
                top: 50%;
                left: 15%;
                right: 15%;
                color: #fff;
                text-align: center;
                transform: translateY(-50%);
            }
            .text-indigo-800{
                color: #00ffd5;
            }
          
           
            .lt {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgb(8, 8, 8);
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
            background-color: rgb(255, 7, 7);
            }
            .st{
                color: rgb(5, 252, 252);
                padding: 0px 45px;
               
            }

            .trigger {
            background-color: #b700ff;
            }

            .trigger:hover{
                background-color: #0f0f0f;
            }
            .pagination {
            display: inline-block;
            }

            .pagination a {
            color: rgb(245, 233, 233);
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid #ddd;
            margin: 0 4px;
            transition: background-color .3s;
            }

            .pagination a.active {
            background-color: #00ff08;
            color: white;
            border: 1px solid #4CAF50;
            }

            .pagination a:hover:not(.active) {background-color: #ff0000;}

            .pagination a:first-child {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            }

            .pagination a:last-child {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            }

          
            
            table {
            width: 100%;
            }
            table, th, td {
            border: 1px solid rgb(231, 0, 0);
            }

             .dtbl {
			width:90%;
			height:100%;
			border:2px dashed #69e2f8;
			border-collapse:collapse;
			padding:5px;
            margin:35px auto;
            overflow:auto;
            }
            .dtbl th {
                border:2px dashed #ff0404;
                padding:5px;
                background: #000000;
                color: #49b40b;
            }
            .dtbl td {
                border:2px dashed #ff0404;
                padding:5px;
                background: #130d0d;
                color: #70fd12;
                text-align: center;
                
            } 
            .errors, h5{
                color: rgb(0, 195, 255);
                text-shadow: 2px 2px 5px rgb(255, 9, 9);
                font-size: 25px;
            }
            .dropbtn {
                color: rgb(0, 195, 255);
                text-shadow: 2px 2px 5px rgb(255, 9, 9);
                padding: 9px;
                font-size: 16px;
                border: none;
                cursor: pointer;
                background-image: linear-gradient(black,#b30000);
                }

                /* The container <div> - needed to position the dropdown content */
                .dropdown {
                position: relative;
                display: inline-block;
                }

                /* Dropdown Content (Hidden by Default) */
                .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
                }

                /* Links inside the dropdown */
                .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                }

                /* Change color of dropdown links on hover */
                .dropdown-content a:hover {background-color: #f1f1f1}

                /* Show the dropdown menu on hover */
                .dropdown:hover .dropdown-content {
                display: block;
                }

                /* Change the background color of the dropdown button when the dropdown content is shown */
                .dropdown:hover .dropbtn {
                background-color: #3e8e41;
                }
                .uolst{
                    list-style-type: none;
                }
        </style>
            
    </head>
                       
    <body>
        <nav>
        <ul class="lt">
            <li class="tt"><a href="{{ url('/') }}">Home</a></li>
            <li class="tt"><a href="{{ route('profile.edit')}}">Profile</a></li>
            <li class="tt"><a href="{{ url('/post/create')}}">Upload a Song</a></li>
            <li class="tt"><a href="{{ url('/index')}}">Browse</a></li>
            <li class="tt"><a href="{{ url('/api')}}">Locate IP</a></li>
            <li class="tt" style="float:right"><a class="trigger" href="{{ route('logout') }}"class="ml-4 text-arial text-indigo-800 ">Logout</a></li>
            <br>
            <li class="st" style="float:right"> Logged In as : {{ Auth::user()->name }}</li>
            <br>
        </ul>
        <div class="dropdown">
            <button class="dropbtn glyphicon glyphicon-globe">Notifications<span class="badge">{{count(auth()->user()->unreadnotifications)}}</span></button>
            <div class="dropdown-content">
                
                <li class="uolst" id="markasRead" onclick="readno()">
                @foreach(auth()->user()->unreadnotifications as $notification)
                @include('layouts.notifications.'.class_basename($notification->type))
               
                @endforeach
                </li>
            </div>
          </div>
    
         <div id="container">

            <a href="{{ url('/') }}"><h1>Music Albums</h1></a>
                
                <header>  
                    <h2 >Trending Songs</h2>             
            </header>
            <div class="errors">
                @if(session('message'))
                    <h5>** {{session('message')}} **</h5>
                    @endif
                </div>
            <table class="dtbl">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Cover</th>
                        <th>Audio</th>
                        <th>Posted Author</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($post_image as $item)
                    <div class="displaycomment">
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><a href="{{ url('/index?page=')}}{{$loop->iteration}}">{{$item->title}}</a></td>
                        <td><a href="{{ url('/index?page=')}}{{$loop->iteration}}">{{$item->message}}</a></td>
                        <td>
                            <a href="{{ url('/index?page=')}}{{$loop->iteration}}"> <img src="/Images/{{$item->pics}}" width="100" height="100"/></a>
                            </td>
                            <td>  
                                <audio controls>
                                    <source src="/Audio/{{($item->audio)}}" type="audio/mpeg">
                                </audio>
                             </td>
                             @if (Auth::check())
                            
                            <td>                             
                                    {{$item->user_post_name}} 
                            </td>
                            <td>
                                @if(Auth::user()->getId() === 1)
                                  <div>
                                    <a href="{{ url('/editpost/')}}/{{$item->id}}" class="btn btn-primary btn-lg me-2">Edit</a>
                                    <button type="button"  value="{{$item->id}}" class=" destroy btn btn-danger btn-lg me-2">Delete</button>
                                  </div>
                                @elseif (Auth::user()->getId() === $item->post_id)
                                <div>
                                    <a href="{{ url('/editpost/')}}/{{$item->id}}" class="btn btn-primary btn-lg me-2">Edit</a>
                                    <button type="button"  value="{{$item->id}}" class=" destroy btn btn-danger btn-lg me-2">Delete</button>
                                  </div>
                                  @else
                                  <h4 style="font-size: 20px"> No Operations Permitted</h4>
                                @endif
                                 
                            </td>
                             @endif
                    </tr>
                </div>
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
                </tbody>
            </table>
         
             
            <div id="rt"></div><br>
                {{-- <footer>              
                        {{$post_image->links()}}
                </footer> --}}
                </div>
         </div>
    </body>
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src ="{{asset('js/main.js')}}"></script>
<script>
         
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click','.destroy',function(){
            if(confirm('Confirm Delete your post?')){
                var press = $(this);
                var postt_id = press.val();
                $.ajax({
                        url: '{{ url('deletepost')}}',
                        type: 'POST',
                        data: {
                            'postt_id' : postt_id
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

                

