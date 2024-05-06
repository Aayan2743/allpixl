$(document).ready(function(){

   // alert("sdhfgbsdkjf");
    // jQuery methods go here...




    $('#login').click(function (e) { 
      e.preventDefault();

     

      $.ajax({
        url:"checklogin", 
        type: "post",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
            uname:$('#uname').val(),
            upassword:$('#upassword').val(),
            
            
        },
        success: function(response) {
            console.log(response);
            $('#error_username').text("");
            $('#error_password').text("");
            if (response.status=="0") {

                $.each(response.message, function (index, value) {


                    if(index=="uname"){
                        $('#error_username').text(value);
                    }
                    if(index=="upassword"){
                        $('#error_password').text(value);
                    }
                                    
                   });
                               
                
            } else if(response.status=="success"){
                window.location.href = "dashboard";
            }
                        else if(response.status=="failuer"){
                $('#error_username').text(response.message);
            }
            
        },
        error: function(jqXHR, textStatus, errorThrown) {
            event.preventDefault();
        }
    }); //end ajax


      
    });


  });