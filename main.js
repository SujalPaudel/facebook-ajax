$(document).ready(function(){
  $('#post-btn').click(function(){
    comment_post_btn_click()

  })
});


function comment_post_btn_click(){

  var _comment = $('.comment-insert-text').val();

  var _userId = $('#userId').val()
  var _userName = $('#userName').val()

  if(_comment.length > 0 && _userId != null){
    console.log(_comment)

    $.post("insert_comment.php", {
      task: "comment_insert",
      userId: _userId,
      comment: _comment,
    }).done(function(data){
      comment_insert(jQuery.parseJSON(data))
      console.log("This is from the server that I recieved " + data)
    }).fail(()=>{
      console.log("This is the fail code sent from the server")
    })
  }
   
  else {

    // proceed with our ajax calls
    console.log("The text area was empty")
  }

  $('.comment-insert-text').val("")  

}

function comment_insert( data ){

  var t = ' ';

  t+= '<li class = "comment-holder" id = "_'+data.commentId+'">';
  t+=  '<div class = "user-img">';
  t+=  '<img src = "'+data.profile_img+'" class = "user-img-pic" />';
  t+=  '</div>';
  t+=  '<h3 class="username-field">'+data.userName+'</h3>';
  t+=  '<div class="comment-text">'+data.comment+'</div>';
  t+=  '<div class="comment-buttons-holder">';
  t+=  '<ul>';
  t+=  '<a><li class = "delete-btn">X</li>';
  t+=  '</ul>';
  t+=  '</div>';
  t+=  '</li>';

  $('.comments-holder-ul').prepend(t);
}



