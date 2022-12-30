
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Post Song</title>
    </head>
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
  
  .file-dummy {
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
  
  &:hover .file-dummy {
    background: rgba(255,255,255,0.1);
  }
  
  input[type=file]:focus + .file-dummy {
    outline: 2px solid rgba(255,255,255,0.5);
    outline: -webkit-focus-ring-color auto 5px;
  }
  
  input[type=file]:valid + .file-dummy {
    border-color: rgba(0,255,0,0.4);
    background-color: rgba(0,255,0,0.3);

    .success {
      display: inline-block;
    }
    .default {
      display: none;
    }
  }
}

    </style>
        <body>
        <form action method="post">
  
            <h1><strong>File upload</strong> with style and pure CSS</h1>
            
            <div class="form-group">
              <label for="title">Title <span>Use title case to get a better result</span></label>
              <input type="text" name="title" id="title" class="form-controll"/>
            </div>
            <div class="form-group">
              <label for="caption">Caption <span>This caption should be descriptiv</span></label>
              <input type="text" name="caption" id="caption" class="form-controll"/>
            </div>
            
            <div class="form-group file-area">
                  <label for="images">Images <span>Your images should be at least 400x300 wide</span></label>
              <input type="file" name="images" id="images" required="required" multiple="multiple"/>
              <div class="file-dummy">
                <div class="success">Great, your files are selected. Keep on.</div>
                <div class="default">Please select some files</div>
              </div>
            </div>
            
            <div class="form-group">
              <button type="submit">Upload images</button>
            </div>
            
          </form>
         
          
          <link href='https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700' rel='stylesheet' type='text/css'>
          
          <a href="http://scribblerockerz.com/drag-n-drop-file-input-without-javascript/" class="back-to-article" target="_blank">back to Article</a>
    </body>
      
         
</html>