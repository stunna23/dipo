
//Ajax call for the contact Form
//Once the form is submitted


$("#contact").submit(function(event){
    // prevent default php processing
    event.preventDefault();
    // collect user inputs 
    var datatopost = $(this).serializeArray();
    console.log(datatopost);
    // send them to contact2.php using AJAX
    $.ajax({
		type: 'POST',
        url: 'signup2.php',
        data: datatopost,
        success: function(data){
            
            if(!data){
                $('#message').html("oh no");
            } else {
                $('#message').html("addes");
				alert("login successful");
            }
            
        },
        error: function(){
            $("#message").html("<div class='alert alert-danger'>There was error with the Ajax Call. Please try again later</div>");
        }
    });
});