$(document).ready(function(){
  $('#post-btn').click(function(){
    var text = $('.comment-insert-text').val();

    if(text.length > 0){
      console.log(text)
    }
    else {

      // proceed with our ajax calls
      console.log("The text area was empty")
    }

    $('.comment-insert-text').val("")

  })
});