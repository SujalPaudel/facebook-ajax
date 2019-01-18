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