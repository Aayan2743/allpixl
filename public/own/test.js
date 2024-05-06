$(document).ready(function () {

    $('#imageUploadForm').submit(function(e){
        e.preventDefault();

        var formData = new FormData();
        var imageInput = $('#logo')[0]; // Access the DOM element directly
        var imagename = $('#oldlogo').val(); // Access the DOM element directly
        
        if (!imageInput || !imageInput.files || !imageInput.files[0]) {
            alert("No image selected or files property not found.");
            // console.error("No image selected or files property not found.");
            return;
        }

        formData.append('image', imageInput.files[0]);
        formData.append('filename', imagename);


        // var formData = new FormData();
        // formData.append('image',$('#image')[0].files[0]);
        $.ajax({
            url:"uploadlogo", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.status=="0") {
                    $.each(response.message, function (index, value) {


                        if(index=="image"){
                            $('#uploadStatus').text(value);
                        }
                       
                                        
                       });
                                   
                    
                } else if(response.status=="success"){
                    $('#uploadStatus').text(response.message);

                }
                
                //$('#uploadStatus').text('Image uploaded successfully.');
            },
            error: function (error) {
                $('#uploadStatus').text('Error uploading image.');
            }
           
        }); //end ajax
    });

      
    $('#deletesourceleadsid').click(function(){
        $.ajax({
            url:"deletesourceid", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                leadsourelids:$('#leadsourelids').val(),
              
                
                
            },
            success: function(response) {
                console.log(response);
                if (response.status=="success") {
                    alert(response.message);
                    location.reload(true);
                                   
                    
                } 
                else if(response.status=="failuer"){
                    alert(response.message);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax
    });

    
    $('#updateleadsourcedata').click(function(){
        $.ajax({
            url:"updateleadsourcedatadetails", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                leadsourceid:$('#leadsourelid').val(),
                leadsourcename:$('#leadsourcename').val(),
                
                
            },
            success: function(response) {
                console.log(response);
                if (response.status=="success") {
                    alert(response.message);
                    location.reload(true);
                                   
                    
                } 
                else if(response.status==0){
                    $.each(response.message, function (index, value) {


                        if(index=="leadsourcename"){
                            $('#e_leadsourcename').text(value);
                        }
                       
                                        
                       });
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax
    });


    $(document).on('click', '.updateleaddatasss', function()
    {
        var lid=$(this).attr("data-leadida");
      // alert(lid); 
        $.ajax({
            url:"getleadosurce", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                lid:lid,
                
                
            },
            success: function(response) {
                console.log(response);
                if (response.status=="success") {
                   // console.log(response.data[0].lsid);
                  //  alert(response.data.phone)
                        $('#leadsourelid').val(response.data[0].lsid);
                        $('#leadsourcename').val(response.data[0].leadsource);
                       
                   
                       
                        
                     
                                   
                    
                } 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax
    




     });


     $(document).on('click', '.deleteleadsource', function()
     {
         var lid=$(this).attr("data-sss");
       //alert(lid); 
         $.ajax({
             url:"getleadosurce", 
             type: "post",
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         // mandatory
             data: {
                 lid:lid,
                 
                 
             },
             success: function(response) {
                 console.log(response);
                 if (response.status=="success") {
                    // console.log(response.data[0].lsid);
                   //  alert(response.data.phone)
                         $('#leadsourelid').val(response.data[0].lsid);
                         $('#leadsourcename').val(response.data[0].leadsource);
                         $('#leadsourelids').val(response.data[0].lsid);
                         $('#ggg').text(response.data[0].leadsource);
                        
                    
                        
                         
                      
                                    
                     
                 } 
             },
             error: function(jqXHR, textStatus, errorThrown) {
                 event.preventDefault();
             }
         }); //end ajax
     
 
 
 
 
      });
});