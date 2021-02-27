$(document).ready(function(){

// if the user clicks on the like button ...
$('#post-data').on('click','.like-btn',function(){
// $('.like-btn').on('click', function(){
  var post_id = $(this).data('id');
  $clicked_btn = $(this);
  if ($clicked_btn.hasClass('far fa-thumbs-up')) {
    action = 'like';
  } else if($clicked_btn.hasClass('fas fa-thumbs-up')){
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
            $clicked_btn.removeClass('far fa-thumbs-up');
            $clicked_btn.addClass('fas fa-thumbs-up');
        } else if(action == "unlike") {
            $clicked_btn.removeClass('fas fa-thumbs-up');
            $clicked_btn.addClass('far fa-thumbs-up');
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
              url: '/home?page=' + page,
              type: "get",
              // datatype: JSON,
              beforeSend: function()
              {
                  $('.process-comm').show();
              }
          })
          .done(function(main_page_posts)
          {
              if(main_page_posts.html == ""){
                  $('.process-comm').html("No more Posts to Load");
                  return;
              }
              $('.process-comm').hide();
              $("#post-data").append(main_page_posts.html);
          })
          .fail(function(jqXHR, ajaxOptions, thrownError)
          {
                alert('server not responding...');
          });
  } 
$('#post-data').on('submit',"form",function(e){
     var formID = $(this).closest("form").attr("id");
        e.preventDefault();
        var comment = $('#comment'+formID).val();
        var post_id = $('#post_id'+formID).val();
        var user_id = $('#user_id'+formID).val();
        if(comment==''){
                    alert('Please write a Comment first!');
                    $('#comment').focus();
        }else{
        var postForm = {comment:comment,post_id:post_id,user_id:user_id}
        $.ajax({
            type: "POST",
            url: '/comments',
            cache: false,
            data: postForm,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            datatype:JSON,
            success: function(data) {
              var value = data.comment;
              html ='<li>'
              +'<div style="background-color: #dee2e6;width: fit-content;border-radius: 5px;padding: 10px;word-break: break-all;float: right;margin-top: 10px;">'
              +value+'<div>'
              +'<li>'+'<hr>'
              $('#data'+formID).append(html);
              document.getElementById(formID).reset();
            }
        });
      }
    });
$('#post-data').on('click',".comment_section",function(e){
         e.preventDefault(); 
        $(".comment-popup.pst-pj").addClass("active");
        $(".wrapper").addClass("overlay");
        var post_id = $(this).data('id');
         // console.log(post_id);

         $.ajax({
                url: 'getcomment/'+post_id,
                datatype:JSON,
                beforeSend: function(){
                         $("#loading").show();
                       },
                       complete: function(){
                         $("#loading").hide();
                       },
                success: function(data){
              var resultData = JSON.parse(data).data;
              // console.log(resultData);
                var bodyData = '';
                if(resultData){
                  $("#hash").empty();
                $.each(resultData,function(index,row){
                  // var ts = row.created_at;
                  // var date=ts.toDateString();
                    // var editUrl = url+'/'+dataResult.id+"/edit";
                    bodyData+='<div>'
                     bodyData+='<div class="col-2">'
                    +'<img style="height: 2rem;" src="'+row.user.image+'" alt="">'
                    +'</div>'
                    +'<div class="col-10" style="width:fit-content;background-color: #dee2e6;padding: 15px;font-size: 15px;border-radius: 10px;float: left;margin-bottom: 10px;margin-inline-start: 10px;box-shadow: 0 0 4px -2px #868e96;">'
                    +'<h2 style="margin-bottom: 10px;">'+row.user.first_name +" "+ row.user.last_name+'</h2>'+'<br>'+'<span>'+row.comment+'</span>'
                    +'<div style="margin-left: 4px;">'+'<img style="margin-top: 2px" src="images/clock.png" alt="">'+row.created_at+
                    +'</div>'+'<a href="#" title="" class="active">'+'<i class="fa fa-reply-all">'+'</i>'+'</a>'
                    +'</div>';
                    bodyData+='</div>';
                });
              $('#hash').append(bodyData);
                // $("#hash").append(bodyData); 
                }else{
                   $("#hash").empty();
                }
              }
            });
         return false;
       });

      $(".comment-project > a").on("click", function(){
        $(".comment-popup.pst-pj").removeClass("active");
        $(".wrapper").removeClass("overlay");

        return false;
    });
  });