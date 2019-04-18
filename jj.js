
  $(document).ready(function () {

    //add a delegate to add event for input box in the table,
    //it will work for new row as well
    $('#myTable').keyup('.name', function (e) {
      //get the value of the textfield
      var enteredName = $(e.target).val();
      
      //delay 1.5 seconds before calling the ajax
      setTimeout(function () {
        if (enteredName != '') {
          $.ajax({
            url: "connection/search.php",
            method: "POST",
            data: {query: enteredName},
            success: function (data) {

              $(e.target).next('div').fadeIn();
              $(e.target).next('div').html(data)
            }
          });
        }
      },1500);

    });

    $('#myTable').on('click', 'li', function () {
      //set the input field with clicked value from the list
      $(this).parent().parent().prev('textarea').val($(this).text());

      //access the parent which is the container for this list and hide it
      $(this).parent().fadeOut();
    });
  });
