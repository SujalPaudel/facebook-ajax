<?php require_once 'defines.php'; ?>

<html>
  <head>
    <title>Comment Section</title>
     <link href = "layout.css" rel = 'stylesheet'/>
     <script type = "text/javascript" src = "jquery.js"></script>
     <script type = "text/javascript" src = "main.js"></script>
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

          <?php 
          $comments = array('a', 'b', 'c', 'd'); ?>
          <?php foreach( $comments as $key => $comment): ?> 
            <li class = "comment-holder" id = "_1">
              <div class = "user-img">
                <img src = "fb_logo.png" class = "user-img-pic" />
              </div>

              <h3 class="username-field">
                Sujal Paudel
              </h3>

              <div class="comment-text">
                The comment of person will go here
                The comment of person will go here
                The comment of person will go here
                The comment of person will go here
                The comment of person will go here
                The comment of person will go here
                The comment of person will go here
                The comment of person will go here
              </div>
              <div class="comment-buttons-holder">
                <ul>
                  <a><li class = "delete-btn">X</li>
                </ul>
              </div>              
              </li>
            <?php endforeach; ?>
         
          </ul>
        </div>
      </div>
    </div>

    <input type = "hidden" id = "userId" value = "1" />
    <input type = "hidden" id = "userName" value = "Sujal Paudel" />

  </body>
</html>




