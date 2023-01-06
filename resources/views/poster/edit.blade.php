<html>
<title>Edit</title>
<style>
.file-area {
  width: 100%;
  position: relative;
  
  input[type=file] {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0;
    cursor: pointer;
  }
  
  .test-file {
    width: 100%;
    padding: 30px;
    background: rgba(255,255,255,0.2);
    border: 2px dashed rgba(255,255,255,0.2);
    text-align: center;
    transition: background 0.3s ease-in-out;
    
    .success {
      display: none;
    }
  }
  
  &:hover .test-file {
    background: rgba(255,255,255,0.1);
  }
  
  input[type=file]:focus + .test-file {
    outline: 2px solid rgba(255,255,255,0.5);
    outline: -webkit-focus-ring-color auto 5px;
  }
  
  input[type=file]:valid + .test-file {
    border-color: rgba(0,255,0,0.4);
    background-color: rgba(0,255,0,0.3);

    .done {
      display: inline-block;
    }
    .default {
      display: none;
    }
    }
  }

  * {
    box-sizing: border-box;
    font-family: 'Lato', sans-serif;
  }

  html,
  body {
    margin: 0;
    padding: 0;
    font-weight: 300;
    height: 100%;
    background: #a80404;
    color: #fff;
    font-size: 16px;
    overflow: hidden;
    background: -moz-linear-gradient(top, #00c3dd 0%, #22009b 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #00c3dd), color-stop(100%, #1c009b));
    background: -webkit-linear-gradient(top,  #00c3dd 0%, #17009b 100%);
    background: -o-linear-gradient(top,  #00c3dd 0%, #00039b 100%);
    background: -ms-linear-gradient(top,  #00c3dd 0%, #22009b 100%);
    background: linear-gradient(to bottom,  #00c3dd 0%, #2f009b 100%);
    
  }

  h1 {
    text-align: center;
    margin: 50px auto;
    font-weight: 100;
  }

  label {
    font-weight: 500;
    display: block;
    margin: 4px 0;
    text-transform: uppercase;
    font-size: 13px;
    overflow: hidden;
    
    span {
      float: right;
      text-transform: none;
      font-weight: 200;
      line-height: 1em;
      font-style: italic;
      opacity: 0.8;
    }
  }

  .trigger {
    display: block;
    padding: 8px 16px;
    width: 100%;
    font-size: 16px;
    background-color: rgba(255,255,255,0.2);
    border: 1px solid rgba(255,255,255,0.3);
    color: #fff;
    font-weight: 200;
    
    &:focus {
      outline: 2px solid rgba(255,255,255,0.5);
      outline: -webkit-focus-ring-color auto 5px;
    }
  }

  button {
    padding: 8px 30px;
    background: rgba(255,255,255,0.8);
    color: #053777;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 11px;
    border: 0;
    text-shadow: 0 1px 2px #fff;
    cursor: pointer;
  }

  .set-form {
    max-width: 500px;
    margin: auto;
    margin-bottom: 30px;
  }
  .set-form1 {
    max-width: 500px;
    margin: auto;
    margin-bottom: 30px;
  }

  .trigger1 {
    display: block;
    padding: 18px 16px;
    width: 100%;
    font-size: 16px;
    background-color: rgba(255,255,255,0.2);
    border: 1px solid rgba(255,255,255,0.3);
    color: #fff;
    font-weight: 200;
    
    &:focus {
      outline: 2px solid rgba(255,255,255,0.5);
      outline: -webkit-focus-ring-color auto 5px;
    }
  }
  .return {
    color: #fff;
    text-transform: uppercase;
    font-size: 12px;
    position: absolute;
    right: 20px;
    top: 20px;
    text-decoration: none;
    display: inline-block;
    background: rgba(0,0,0,0.6);
    padding: 10px 18px;
    transition: all 0.3s ease-in-out;
    opacity: 0.6;
    
    &:hover {
      opacity: 1;
      background: rgba(0,0,0,0.8);
    }
  }
        
  </style>
 
    
<form action="{{url('/updatepost/')}}/{{$edit->id}}" method="POST"  enctype="multipart/form-data">
  {{ csrf_field() }}
  @method('PUT')
  <h1><strong>Edit the Post</strong> => Playlist</h1>
  
  <div class="set-form">
    <label for="title">Title Track </label>
    <input type="text" name="title" id="title" class="trigger" value="{{$edit->title}}"/>
  </div>
  <div class="set-form1">
    <label for="msg">Description of the song  </label>
    <textarea type="text" msg cols="30" rows="5" name="message" id="message" class="trigger1">{{$edit->message}}</textarea>   
  </div>
  
  <div class="set-form file-area">
        <label for="images">Picture <span>Choose any resolution but size needs to be below 5MB</span></label>
    <input type="file" accept="image/*" name="pics" id="pics" required="required" multiple="multiple"><img src="/Images/{{$edit->pics}}" width="100" height="100"/>  
</div>

  <div class="set-form file-area">
    <label for="audio">Audio File <span>Choose a file size below 3MB</span></label>
    <input type="file" accept="audio/*" name="audio" id="audio" required="required" multiple="multiple"/>
  </div>
  
          <div class="set-form">
      
            <button type="submit">Update Details</button>
          </div>
            
        </form>

<a href="{{ url('/main')}}" class="return" >Main</a>

</html>