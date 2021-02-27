$(document).ready(function(){

// if the user clicks on the like button ...
$('#post-data').on('click','.like-btn',function(){
// $('.like-btn').on('click', function(){
  var post_id = $(this).data('id');
  $clicked_btn = $(this);
  if ($clicked_btn.hasClass('fas fa-heart')) {
    action = 'like';
  } else if($clicked_btn.hasClass('fa-thumbs-up')){
    action = 'unlike';
  }
  $.ajax({
    url: '/like',
    type: 'post',
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
        'action': action,
        'post_id': post_id
    },
    datatype:JSON,
    success: function(data){
        res = JSON.parse(data);
        // console.log(data);
        if (action == "like") {
            $clicked_btn.removeClass('fas fa-heart');
            $clicked_btn.addClass('fa-thumbs-up');
        } else if(action == "unlike") {
            $clicked_btn.removeClass('fa-thumbs-up');
            $clicked_btn.addClass('fas fa-heart');
        }
        // display the number of likes and dislikes
        $clicked_btn.siblings('span.likes').text(res.likes);
        $clicked_btn.siblings('span.dislikes').text(res.dislikes);

        // change button styling of the other button if user is reacting the second time to post
         // $clicked_btn.siblings('i.fa-thumbs-down').removeClass('fa-thumbs-down').addClass('fa-thumbs-o-down');
    }
  });       

});


// ajax for user_profile page

var page = 1;
  $(window).scroll(function() {
      if($(window).scrollTop() + $(window).height() >= $(document).height()) {
          page++;
          loadMoreData(page);
      }
  });


  function loadMoreData(page){
    $.ajax(
          {
              url: '/user_profile?page=' + page,
              type: "get",
              // datatype: JSON,
              beforeSend: function()
              {
                  $('.process-comm').show();
              }
          })
          .done(function(data)
          {
              if(data.html == ""){
                  $('.process-comm').html("No more Posts to Load");
                  return;
              }
              $('.process-comm').hide();
              $("#post-data").append(data.html);
          })
          .fail(function(jqXHR, ajaxOptions, thrownError)
          {
                alert('server not responding...');
          });
  }
});