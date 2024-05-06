$(document).ready(function(){


    $('#addhospital').click(function (e) { 
        e.preventDefault();
        $.ajax({
            url:"dashboard/addhospitaldata", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
   
            data: {
                hopsitalname:$('#hopsitalname').val(),
                hopsitallocation:$('#hopsitallocation').val(),
                hopsitalemail:$('#hospitalemailid').val(),
                hopsitalphone:$('#hospitalmobile').val(),
                adminid:$('#adminid').val(),
                adminpassword:$('#adminpassword').val(),
              
                
                
            },
            success: function(response) {
                console.log(response);
                $('#error_hospitalname').text("");
                $('#error_hospitaladdress').text("");

                $('#error_email').text("");
                $('#error_mobile').text("");
                $('#error_adminid').text("");
                $('#error_adminpassword').text("");

                if (response.status=="0") {
    
                    $.each(response.message, function (index, value) {


                        if(index=="hopsitalname"){
                            $('#error_hospitalname').text(value);
                        }
                        if(index=="hopsitallocation"){
                            $('#error_hospitaladdress').text(value);
                        }

                        if(index=="hopsitalemail"){
                            $('#error_email').text(value);
                        }

                        if(index=="hopsitalphone"){
                            $('#error_mobile').text(value);
                        }

                        if(index=="adminid"){
                            $('#error_adminid').text(value);
                        }

                        if(index=="adminpassword"){
                            $('#error_adminpassword').text(value);
                        }

                      
                                        
                       });
                } 
                else if(response.status=="success"){
                    $('#error_hospitalname').text(response.message); 
                    location.reload(true);
                }
                else if(response.status=="failuer"){
                    $('#error_hospitalname').text(response.message); 
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax
      });

});