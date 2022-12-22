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
        <link rel="stylesheet" href="css/bootstrap.min.css">
       
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
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body{
                
                background:#b32d00;
                font-size:16px;
                height:auto;
                background-image: linear-gradient(#b32d00, black);
                
            }

            #container{
                    
                    background:black;
                    color:white;
                    width:60%;
                    margin:20px auto;
                    overflow:auto;
                    padding:30px;
                    font-size:16px;
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
                color:#00ff00;
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
                color:white;
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
        </style>
        <script>
            ck = new CK(
            {
                animateClass: 'animated',
                offset: 100,
                callback:     function(box) {
                console.log("CK: animating <" + box.tagName.toLowerCase() + ">")
                }
            }
            );
            ck.init();
            document.getElementById('moar').onclick = function() {
            var section = document.createElement('section');
            section.className = 'section--purple ck fadeInDown';
            this.parentNode.insertBefore(section, this);
            };
            
    </script>
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
      
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div id="container">
                <!-- header tag --> 
            
                <h1>Music Albums</h1>
                
            
                <!-- section within header for result-->
                
                <div id="rt"></div><br>
                <header>  
                    <h2 >Trending Songs</h2>             
                <section>
                    <div id="slider-animation" class="carousel slide" data-ride="carousel">
                
                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <li data-target="#slider-animation" data-slide-to="0" class="active"></li>
                    <li data-target="#slider-animation" data-slide-to="1"></li>
                    <li data-target="#slider-animation" data-slide-to="2"></li>
                    <li data-target="#slider-animation" data-slide-to="3"></li>
                  </ul>
                
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="{{ url('/Dasboard') }}">
                      <img src="https://images.hdqwalls.com/download/cyberpunk-colorful-ai-art-5k-0u-1280x720.jpg" alt="Los Angeles">
                        <div class="text-box">
                            <h2 class="wow slideInRight" data-wow-duration="1s">PASSION - Positive Lounge Chillout Music</h2>
                            <p class="wow slideInLeft" data-wow-duration="1s">by Oleg Mazur</p>
                        </div>
                    </a>
                    </div>
                    <div class="carousel-item">
                        <a href="{{ url('/login') }}">
                      <img src="https://images.hdqwalls.com/download/abstract-color-wind-5b-1280x720.jpg" alt="Chicago">
                      
                    <div class="text-box">
                            <h2 class="wow slideInUp" data-wow-duration="1s" >Christmas Background Music</h2>
                            <p class="wow fadeInDown" data-wow-duration="1s"> </p>by Oleg Mazur</div>
                    </a>
                    </div>
                    <div class="carousel-item">
                        <a href="{{ url('/login') }}">
                      <img src="https://images.hdqwalls.com/download/abstract-bangles-4k-7c-1280x720.jpg" alt="New York">
                    <div class="text-box">
                            <h2 class="wow fadeInUp" data-wow-duration="1s">Lo-Fi Chill Music - Lofi Music for Work / Study / Relax</h2>
                            <p class="wow fadeInUp" data-wow-duration="1s">by Oleg Mazur</p>
                        </div>
                    </a>
                    </div>

                    <div class="carousel-item">
                        <a href="{{ url('/login') }}">
                      <img src="https://images.hdqwalls.com/download/lightning-abstract-art-4k-4v-1280x720.jpg" alt="York">
                    <div class="text-box">
                            <h2 class="wow fadeInUp" data-wow-duration="1s">HAPPY LUCKY JOYFUL MUSIC | Background Uplifting Music for Positive Mood and Inspiration</h2>
                            <p class="wow fadeInUp" data-wow-duration="1s">by Oleg Mazur</p>
                        </div>
                    </a>
                    </div>
                  </div>
                
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#slider-animation" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#slider-animation" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                
                </div>
                    
                </section>

            </header>
                <div id="rt"></div><br>
                <footer>
                    <p><center><strong>COPYRIGHTS RESERVED 2023 |  AK</strong></center></p>
                </footer>
                </div>
    </body>
</html>
