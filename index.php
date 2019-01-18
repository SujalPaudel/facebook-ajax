<?php require_once 'defines.php'; ?>

<html>
  <head>
    <title>Comment Section</title>
     <link href = "layout.css" rel = 'stylesheet'/>
     <script type = "text/javascript" src = "jquery.js"></script>
     <script type = "text/javascript" src = "main.js?t=<?php echo time();?>"></script>
  </head>

  <body>
    <div class = "wrapper">
      <div class = "page-data">
        The page content lies over here
      </div>

          <button id = "post-btn">Post</button>
       
      <div class = "comment-wrapper">
        <h3 class = 'comment-title'>User Feedback...</h3>
       
        <div class="comment-insert">
          <textarea class = "comment-insert-text"></textarea>
        </div>

        <div class="comments-list">
          <ul class = "comments-holder-ul">

      
         
          </ul>
        </div>
      </div>
    </div>

    <input type = "hidden" id = "userId" value = "1" />
    <input type = "hidden" id = "userName" value = "Sujal Paudel" />

  </body>
</html>




