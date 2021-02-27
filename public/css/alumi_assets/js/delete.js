/********************** DELETE FUNCTION ***************************/
$(function() {
$('.btn-del').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href')

    Swal.fire({
          title : 'are you sure?',
          text : 'record will be deleted?',
          type : 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Delete record?',
        }).then((result) => {
        if (result.value) {
          document.location.href = href;
        }

      })
  });
});
/********************** DISABLE FUNCTION ***************************/
$(function() {
$('.btn-disable').on('click', function(e) {
    e.preventDefault();
    // const href = $(this).attr('href')

    Swal.fire({
          title : 'are you sure?',
          text : 'This User Will be Disabled?',
          type : 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Disable User?',
        }).then((result) => {
        if (result.value) {
            document.storyForm.action = "/admin/disable"
            document.storyForm.submit();
        }

      })
  });
});