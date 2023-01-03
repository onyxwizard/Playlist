<!DOCTYPE html>
<html>
    <title>Browse</title>
    @foreach($post_image as $item)
<style>
    
       body{
        background:#1f1e1e;
        font-size:16px;
         height:auto;
         background-image: linear-gradient(rgb(253, 5, 5),#080606);
       }
       #container{
                    
                    /* background:none; */
                    color:white;
                    box-align: center;
                    margin:15px auto;
                    overflow:auto;
                    padding:15px;
                    width: 25%;                
            }
            #csection{
                color:rgb(240, 232, 232);
                background-color: #080606;
                text-decoration-color: #04eee2;
                    margin:1px 0px;
                    overflow:auto;
                    padding:2px;
                    width: 50%;  

            }
            textarea{
                width: 95%;
            }

            
        .box{            
            width:100%;
            height:400px;
            position:relative;
            -webkit-perspective: 1000px;
            perspective: 1000px;
            font-family:verdana;
            border-radius:10px;
            font-size:16px;
            font-family:Arial, Helvetica, sans-serif;

            }
            .cd{
            width:100%;
            height:100%;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transition: all .5s linear;
            transition: all .5s linear;
            border-radius:10px;
            }
            .face {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background-color:rgb(245, 11, 11);  
            border-radius:10px;
            }
            .back {
            overflow:hidden;
            z-index:-1;
            display: block;
            -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
            box-sizing: border-box;
            &:before{
                content: "";
                position: absolute;
                width: 50%;
                height: 50%;
                z-index: -1;
                background-size:50% 50%;
                background: url("/Images/{{$item->pics}}");
                -webkit-transform: rotateY(180deg);
                -moz-transform: rotateY(180deg);
                -ms-transform: rotateY(180deg);
                -o-transform: rotateY(180deg);
                transform: rotateY(180deg);
            }
            }
            .front, .back{
            transition: all .5s linear;
            }
            .front{
            background-image:url("/Images/{{$item->pics}}");
            z-index:1;
            background-size:100% 100%;
            box-shadow: 5px 5px 5px #aaa;
            }
            .back{
                background-image:url("/Images/{{$item->pics}}");
                z-index:1;
                background-size:100% 100%;
                box-shadow: 0 0 0 #aaa;
            }
            .flipped, .turncd:hover{
            -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
            .front{
                box-shadow:0 0 0 #aaa;
            }
            .back{
                box-shadow: 5px 5px 5px rgb(235, 11, 11);
            }
            }
            h2, h3{
                text-align: center;
                color: aliceblue;
            }

            
            footer{
                text-align:center;
                border:rgb(4, 253, 99) dashed 1.9px;
                color:#04eee2;
                padding:5px;
                box-align: center;
                    margin:0px 0px 0px 800px;
                   
                    padding:15px;
                    width: 25%;
              
                
            }
            .pagination {
            display:flex;
            width: auto;
            
            }

            .pagination a {
            color: rgb(255, 1, 255);
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid #4CAF50;
            margin: 0 4px;
            transition: background-color .3s;
            box-align: center;
            }

            .pagination a.active {
            background-color: #00ff08;
            color: white;
            border: 1px solid #06e9e9;
            }

            .pagination a:hover:not(.active) {
                background-color: #fa0d05;
            }
            h1{
                text-align: center;
                color: #04eee2;
            }
           
         
          
                    
        </style>
        <body>
            @if (Auth::check())
            <div id="container">
                <a href="{{ url('/main') }}"><h1>Home</h1></a>
            <div class="box">
                <div class="cd turncd">
                  <div class="front face">
                    <h2>{{$item->title}}</h2>
                    <br><br><br><br><br><br><br><br><br><br><br><br>

                    <h3>
                        Posted By <br>{{$item->user_post_name}}<br> ID {{ $item->post_id}}
                        
                        </h3>
                  </div>
                  <div class="back face">
                    <br>
                    <h3>{{$item->message}}</h3>
                    {{-- <div class="botprice">
                      <h3>6000kr</h3>
                    </div> --}}
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
                                 
                </div>
                   
                <footer> 
                    <span>            
                        {{$post_image->links()}}
                    </span>
                </footer>
                
        <!- Here goes the Commenting for Each Post-->
            <div id="csection">
                <h4> Comment Section </h4>
                <form action = "{{url('comments')}}" method="POST">
                    @csrf
                    <input type="hidden" name="post_slug" value="fun">
                    <textarea name="comment_bdy" rows="6" required></textarea>
                    <button type="submit"> Submit </button>
                </form>
            </div>

                <br>
           
                    
            </div>
        </body>                 
        
</html>
