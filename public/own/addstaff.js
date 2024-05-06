$(document).ready(function(){


// alert("sdghsdgfk");
//editstaff
$(document).on('click', '.updatestaff', function()
    {
        var lid=$(this).attr("data-empid");
        //alert(lid); 
        $.ajax({
            url:"getstaffbyid", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                sid:lid,
                
                
            },
            success: function(response) {
                console.log(response);
                if (response.status=="success") {
                        $('#empname1').val(response.data[0].fullname);
                        $('#empemail1').val(response.data[0].email);
                        // $('#u_designation').val(response.data[0].role);
                        $("#emprole1 option[value="+response.data[0].role+"]").attr('selected', 'selected'); 
                       
                        $('#emppassword1').val(response.data[0].password);
                        $('#empmobile1').val(response.data[0].mobile);
                        $('#empdesignation1').val(response.data[0].designation);
                        $('#empid').val(response.data[0].uid);
                        
                     
                                   
                    
                } 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax
    




     });


     $(document).on('click', '.deletestaff', function()
    {
        var lid=$(this).attr("data-empid");
        //alert(lid); 
        $.ajax({
            url:"getstaffbyid", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                sid:lid,
                
                
            },
            success: function(response) {
                console.log(response);
                if (response.status=="success") {
                        $('#empids').text(response.data[0].fullname);
                        $('#employeeid').text(response.data[0].uid);
                       
                        
                     
                                   
                    
                } 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax
    




     });

// $('#addstaff').click(function (e) { 
//     e.preventDefault();

    $('#addemp').on('submit', function(e){
        e.preventDefault();
        var formData = new FormData(this);

    $.ajax({
        url:"addstaff", 
        type: "post",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	// mandatory
        // data: {
        //     staffname:$('#staffname').val(),
        //     designation:$('#designation').val(),
        //     staffemail:$('#staffemail').val(),
        //     staffpassword:$('#staffpassword').val(),
        //     staffphone:$('#staffphone').val(),
            
            
        // },
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            console.log(response);
            if (response.status=="0") {
                $('#e_empname').text("");
                $('#e_empemail').text("");
                $('#e_emppassword').text("");
                $('#e_empdesignation').text("");
                $('#e_empmobile').text("");
                $.each(response.message, function (index, value) {


                    if(index=="empname"){
                        $('#e_empname').text(value);
                    }
                    if(index=="empemail"){
                        $('#e_empemail').text(value);
                    }
                    if(index=="emppassword"){
                        $('#e_emppassword').text(value);
                    }
                    if(index=="empdesignation"){
                        $('#e_empdesignation').text(value);
                    }
                    if(index=="empmobile"){
                        $('#e_empmobile').text(value);
                    }
                                    
                   });
                               
                
            } 
            else if(response.status=="success"){
                alert(response.message);
                location.reload(true);
            }else if(response.status=="failuer"){
                alert(response.message);
                location.reload(true);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            event.preventDefault();
        }
    }); //end ajax
    
  });


  
  $('#deleteemp').click(function (e) { 
        e.preventDefault();
        $.ajax({
            url:"deletestaff", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                staffid:$('#employeeid').text(),
            
                
                
            },
            // data: formData,
            // processData: false,
            // contentType: false,
            success: function(response) {
                console.log(response);
                if (response.status=="0") {
                   
                                   
                    
                } 
                else if(response.status=="success"){
                    alert(response.message);
                    location.reload(true);
                }else if(response.status=="failuer"){
                    alert(response.message);
                    location.reload(true);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax
        
      });
    




//   $('#updateemp').click(function (e) { 
//     e.preventDefault();
$('#editemp').on('submit', function(ee){
    ee.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        url:"updatestaff", 
        type: "post",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	// mandatory
        // data: {
        //     staffid:$('#staffid').val(),
        //     u_staffname:$('#u_staffname').val(),
        //     u_designation:$('#u_designation').val(),
            
        //     u_staffpassword:$('#u_staffpassword').val(),
        //     u_staffphone:$('#u_staffphone').val(),
            
            
        // },
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            console.log(response);
            if (response.status=="0") {
                $('#e_empname1').text("");
                $('#e_empdesignation1').text("");
                $('#e_empemail1').text("");
                $('#e_emppassword1').text("");
                $('#e_empmobile1').text("");
                $.each(response.message, function (index, value) {


                    if(index=="empname"){
                        $('#e_empname1').text(value);
                    }
                    if(index=="empdesignation"){
                        $('#e_empdesignation1').text(value);
                    }
                 
                    if(index=="emppassword"){
                        $('#e_emppassword1').text(value);
                    }
                    if(index=="empmobile"){
                        $('#e_empmobile1').text(value);
                    }
                                    
                    if(index=="empemail"){
                        $('#e_empemail1').text(value);
                    }
                   });
                               
                
            } 
            else if(response.status=="success"){
                alert(response.message);
                location.reload(true);
            }else if(response.status=="failuer"){
                alert(response.message);
                location.reload(true);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            event.preventDefault();
        }
    }); //end ajax
    
  });


  //updatestaff
















    // $('#addstaff').click(function (e) { 
    //     e.preventDefault();

    //     $.ajax({
    //         url:"addstaff", 
    //         type: "post",
    //         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //     // mandatory
    //         data: {
    //             staffname:$('#staffname').val(),
    //             staffrole:$('#staff_role').val(),
    //             username:$('#username').val(),
    //             userpassword:$('#staffpassword').val(),
    //             hospitalid:$('#hospital_name').val(),
                
                
    //         },                    
              
    //         success: function(response) {
    //             $('#error_staffname').text("");
    //             $('#error_username').text("");
    //             $('#error_staffpassword').text("");
    //             if (response.status=="0") {
    //                 $.each(response.message, function (index, value) {


    //                     if(index=="staffname"){
    //                         $('#error_staffname').text(value);
    //                     }
    //                     if(index=="username"){
    //                         $('#error_username').text(value);
    //                     }
    //                     if(index=="userpassword"){
    //                         $('#error_staffpassword').text(value);
    //                     }
                                        
    //                    });

                    
    //             } 
    //         },
    //         error: function(jqXHR, textStatus, errorThrown) {
    //             event.preventDefault();
    //         }
    //     }); //end ajax



        
    //   });



});