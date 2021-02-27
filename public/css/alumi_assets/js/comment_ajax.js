$(document).ready(function () {
//     $('#post-data').on('click','.like-btn',function(){
 $('.follow-btn').on('click', function(){
  var following_id = $(this).data('id');
  console.log(following_id);
  $clicked_btn = $(this);
  if ($clicked_btn.hasClass('fas fa-user-plus')) {
    action = 'follow';
  } else if($clicked_btn.hasClass('fas fa-thumbs-up')){
    action = 'unfollow';
  }
  $.ajax({
    url: '/follow',
    type: 'post',
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
        'action': action,
        'following_id': following_id,
    },
    datatype:JSON,
    success: function(data){
        res = JSON.parse(data);
        // console.log(data);
        if (action == "follow") {
            $clicked_btn.removeClass('fas fa-user-plus');
            $clicked_btn.addClass('fas fa-thumbs-up');
        } else if(action == "unfollow") {
            $clicked_btn.removeClass('fas fa-thumbs-up');
            $clicked_btn.addClass('fas fa-user-plus');
        }
        // display the number of likes and dislikes
        $clicked_btn.siblings('span.follow').text(res.follow);
      }
    });       

  });
});