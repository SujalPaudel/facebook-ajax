<?php 
  
  if(isset($_POST['task']) && $_POST['task'] == 'comment_insert'){
    // echo "This page was accessed with the post request";
    $userId = (int)$_POST['userId'];
    $comment = str_replace("\n", "<br>", $_POST['comment']);

    $std = new stdClass();
    $std->userId = $userId;
    $std->commentId = 24;
    $std->comment = $comment;
    $std->userName = "Sujal Paudel";
    $std->profile_img = '/bangladeshi/fb_logo.png';

    echo json_encode($std);

  }else{
    header('location: /bangladeshi/');
  }

?>
