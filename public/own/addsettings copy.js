$(document).ready(function () {
    
    
    

    $('#edittemplate').click(function(e){
        e.preventDefault();
       


        $.ajax({
            url:"updatetemplatebyid", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                template_name:$('#etemplatename').val(),
                template_message:$('#etemplatemessage').val(),
                template_id:$('#etemplateid').val(),
                
                
                
            },
            success: function(response) {
             
                if (response.status=="success") {
                 //console.log(response.data[0].fid);
                    // $('#e_leadsources').val(response.data[0].leadsource);
                    // $('#leadsourceid').val(response.data[0].lsid);
                    // $('#srcid').text(response.data[0].leadsource);
                    // $('#srcids').text(response.data[0].lsid);
                   alert(response.message);
                   location.reload(true);
                       
                       
                        
                     
                                   
                    
                } else if(response.status=="0"){
                    $('#ee_templatename').text("");
                    $('#ee_templatemessage').text("");
                    $.each(response.message, function (index, value) {


                        if(index=="template_name"){
                            $('#ee_templatename').text(value);
                        }

                        if(index=="template_message"){
                            $('#ee_templatemessage').text(value);
                        }
                     

                      
                                        
                       });


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


    $('#createtemplate').click(function(e){
        e.preventDefault();
       


        $.ajax({
            url:"addwhatapptemplete", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                template_name:$('#templatename').val(),
                template_message:$('#templatemessage').val(),
                
                
                
            },
            success: function(response) {
             
                if (response.status=="success") {
                 //console.log(response.data[0].fid);
                    // $('#e_leadsources').val(response.data[0].leadsource);
                    // $('#leadsourceid').val(response.data[0].lsid);
                    // $('#srcid').text(response.data[0].leadsource);
                    // $('#srcids').text(response.data[0].lsid);
                   alert(response.message);
                   location.reload(true);
                       
                       
                        
                     
                                   
                    
                } else if(response.status=="0"){
                    $('#e_templatename').text("");
                    $('#e_templatemessage').text("");
                    $.each(response.message, function (index, value) {


                        if(index=="template_name"){
                            $('#e_templatename').text(value);
                        }

                        if(index=="template_message"){
                            $('#e_templatemessage').text(value);
                        }
                     

                      
                                        
                       });


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


    $(document).on('click', '.edittemplate', function()
    {
        var fid=$(this).attr("data-tid");
       // alert(fid); 
        $.ajax({
            url:"gettemplatebyid", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                fid:fid,
                
                
            },
            success: function(response) {
             
                if (response.status=="success") {
                 //console.log(response.data[0].fid);
                    $('#etemplatename').val(response.data[0].template_name);
                    $('#etemplatemessage').val(response.data[0].template_message);
                    $('#etemplateid').val(response.data[0].templateid);
                  
                   
                  
                //    alert(response.message);
                //    location.reload(true);
                       
                       
                        
                     
                                   
                    
                } 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax
    
    
    
    
    
     });

     $(document).on('click', '.deletetemplate', function()
     {
         var fid=$(this).attr("data-tid");
        // alert(fid); 
         $.ajax({
             url:"gettemplatebyid", 
             type: "post",
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         // mandatory
             data: {
                 fid:fid,
                 
                 
             },
             success: function(response) {
              
                 if (response.status=="success") {
                  //console.log(response.data[0].fid);
                     $('#tmpid').text(response.data[0].templateid);
                     $('#tmpname').text(response.data[0].template_name);
                    //  $('#etemplatemessage').val(response.data[0].template_message);
                    //  $('#etemplateid').val(response.data[0].templateid);
                   
                    
                   
                 //    alert(response.message);
                 //    location.reload(true);
                        
                        
                         
                      
                                    
                     
                 } 
             },
             error: function(jqXHR, textStatus, errorThrown) {
                 event.preventDefault();
             }
         }); //end ajax
     
     
     
     
     
      });

      

      $('#deletetemplatedata').click(function(e){
        e.preventDefault();
       


        $.ajax({
            url:"deletetemplatebyid", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                fid:$('#tmpid').text(),
                
                
            },
            success: function(response) {
             
                if (response.status=="success") {
                 //console.log(response.data[0].fid);
                    // $('#e_leadsources').val(response.data[0].leadsource);
                    // $('#leadsourceid').val(response.data[0].lsid);
                    // $('#srcid').text(response.data[0].leadsource);
                    // $('#srcids').text(response.data[0].lsid);
                   alert(response.message);
                   location.reload(true);
                       
                       
                        
                     
                                   
                    
                } 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax
    

    });
 


    $(document).on('click', '.editleadstage', function()
    {
        var fid=$(this).attr("data-stageid");
       // alert(fid); 
        $.ajax({
            url:"getleadstagebyid", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                fid:fid,
                
                
            },
            success: function(response) {
             
                if (response.status=="success") {
                 //console.log(response.data[0].fid);
                    $('#e_leadstage').val(response.data[0].stagename);
                    $('#e_leadstage_id').val(response.data[0].stageid);
                    $('#stagename').text(response.data[0].stagename);
                    $('#stagenameid').text(response.data[0].stageid);
                   
                  
                //    alert(response.message);
                //    location.reload(true);
                       
                       
                        
                     
                                   
                    
                } 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax
    
    
    
    
    
     });

     $('#deleteleadstagedata').click(function(e){
        e.preventDefault();
       


        $.ajax({
            url:"deleteleadstagebyid", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                fid:$('#stagenameid').text(),
                
                
            },
            success: function(response) {
             
                if (response.status=="success") {
                 //console.log(response.data[0].fid);
                    // $('#e_leadsources').val(response.data[0].leadsource);
                    // $('#leadsourceid').val(response.data[0].lsid);
                    // $('#srcid').text(response.data[0].leadsource);
                    // $('#srcids').text(response.data[0].lsid);
                   alert(response.message);
                   location.reload(true);
                       
                       
                        
                     
                                   
                    
                } 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax
    

    });
     

     $('#edit_stage_name').click(function(e){
        e.preventDefault();
       


        $.ajax({
            url:"updateleadstagebyid", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                stagename:$('#e_leadstage').val(),
                stageid:$('#e_leadstage_id').val(),
                
                
            },
            success: function(response) {
             
                if (response.status=="success") {
                 //console.log(response.data[0].fid);
                    // $('#e_leadsources').val(response.data[0].leadsource);
                    // $('#leadsourceid').val(response.data[0].lsid);
                    // $('#srcid').text(response.data[0].leadsource);
                    // $('#srcids').text(response.data[0].lsid);
                   alert(response.message);
                   location.reload(true);
                       
                       
                        
                     
                                   
                    
                } else if(response.status=="0"){
                    $('#er_leadstage').text("");
                    $.each(response.message, function (index, value) {


                        if(index=="stagename"){
                            $('#er_leadstage').text(value);
                        }
                     

                      
                                        
                       });


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
    

    $('#addleadstage').click(function(e){
        e.preventDefault();
       


        $.ajax({
            url:"addleadstage", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                stagename:$('#stagenames').val(),
                
                
            },
            success: function(response) {
             
                if (response.status=="success") {
                 //console.log(response.data[0].fid);
                    // $('#e_leadsources').val(response.data[0].leadsource);
                    // $('#leadsourceid').val(response.data[0].lsid);
                    // $('#srcid').text(response.data[0].leadsource);
                    // $('#srcids').text(response.data[0].lsid);
                   alert(response.message);
                   location.reload(true);
                       
                       
                        
                     
                                   
                    
                } else if(response.status=="0"){
                    $('#e_stagename').text("");
                    $.each(response.message, function (index, value) {


                        if(index=="stagename"){
                            $('#e_stagename').text(value);
                        }
                     

                      
                                        
                       });


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

    $('#deleteleadsourcedata').click(function(e){
        e.preventDefault();
       


        $.ajax({
            url:"deleteleadsourcebyid", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                fid:$('#srcids').text(),
                
                
            },
            success: function(response) {
             
                if (response.status=="success") {
                 //console.log(response.data[0].fid);
                    // $('#e_leadsources').val(response.data[0].leadsource);
                    // $('#leadsourceid').val(response.data[0].lsid);
                    // $('#srcid').text(response.data[0].leadsource);
                    // $('#srcids').text(response.data[0].lsid);
                   alert(response.message);
                   location.reload(true);
                       
                       
                        
                     
                                   
                    
                } 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax
    

    });


    $(document).on('click', '.getleadsource', function()
    {
        var fid=$(this).attr("data-leadid");
       // alert(fid); 
        $.ajax({
            url:"getleadsourcebyid", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                fid:fid,
                
                
            },
            success: function(response) {
             
                if (response.status=="success") {
                 //console.log(response.data[0].fid);
                    $('#e_leadsources').val(response.data[0].leadsource);
                    $('#leadsourceid').val(response.data[0].lsid);
                    $('#srcid').text(response.data[0].leadsource);
                    $('#srcids').text(response.data[0].lsid);
                //    alert(response.message);
                //    location.reload(true);
                       
                       
                        
                     
                                   
                    
                } 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax
    
    
    
    
    
     });
    

     $('#e_leadsourcedd').click(function (e) {
        e.preventDefault();
       // alert("sdfjsdfh");
        $.ajax({
            url:"updateleadsource", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                leadname:$("#e_leadsources").val(),
                lsidd:$("#leadsourceid").val(),
                
                
            },
            success: function(response) {
                console.log(response);
                if (response.status=="success") {
                    alert(response.message)
                   location.reload(true); 
    
                                   
                    
                } else if(response.status=="0"){
                    $('#ess_leadsource').text("");
                    $.each(response.message, function (index, value) {


                        if(index=="e_leadsources"){
                            $('#ess_leadsource').text(value);
                        }
                      

                      
                                        
                       });

                }   
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax

       });



$(document).on('click', '.closefollowup', function()
{
    var fid=$(this).attr("data-fids");
     //alert(fid); 
    $.ajax({
        url:"closefollowupdtatus", 
        type: "post",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    // mandatory
        data: {
            fid:fid,
            
            
        },
        success: function(response) {
         
            if (response.status=="success") {
             //console.log(response.data[0].fid);

               alert(response.message);
               location.reload(true);
                   
                   
                    
                 
                               
                
            } 
        },
        error: function(jqXHR, textStatus, errorThrown) {
            event.preventDefault();
        }
    }); //end ajax





 });



    
        $('#addleadsource').click(function(e){
            //alert("sdjhsdf");
            $.ajax({
                url:"addleadsource", 
                type: "post",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            // mandatory
                data: {
                    leadname:$("#leadsources").val(),
                    
                    
                },
                success: function(response) {
                    console.log(response);
                    if (response.status=="success") {
                        alert(response.message)
                       location.reload(true); 
        
                                       
                        
                    } e    
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    event.preventDefault();
                }
            }); //end ajax
        
    });
   
    $('#updatesession').click(function (param) {
            //alert("sdfjhfg");
            var heading=$('#title_heading').val();
           // alert(heading);
            $.ajax({
                url:"updatesession", 
                type: "post",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            // mandatory
                data: {
                    heading:heading,
                    
                    
                },
                success: function(response) {
                    console.log(response);
                    if (response.status=="success") {
                        alert(response.message)
                       location.reload(true); 
        
                                       
                        
                    } 
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    event.preventDefault();
                }
            }); //end ajax

      })


  $('#searchbydata').click(function (e) {
        e.preventDefault();
        var selected_date=$("#selectdata").val();
            if(selected_date==""){
                alert("Please select date");
            }else{

                $.ajax({
                    url:"getfolloupbydate", 
                    type: "post",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                // mandatory
                    data: {
                        selectedate:selected_date,
                        
                        
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.status=="1") {
            
                                           
                            
                        } 
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        event.preventDefault();
                    }
                }); //end ajax
                alert(selected_date);
            }
       
    });

  $('#addsettings').click(function (e) { 
    e.preventDefault();

    $.ajax({
        url:"savesettings", 
        type: "post",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	// mandatory
        data: {
            heading:$('#heading').val(),
            
            
        },
        success: function(response) {
           // console.log(response);
            $('#e_heading').text("")
            if (response.status=="0") {
                $.each(response.message, function (index, value) {


                    if(index=="heading"){
                        $('#e_heading').text(value);
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


  $(document).on('click', '.headingadd', function()
  {
      var lid=$(this).attr("data-sid");
    // alert(lid); 
      $.ajax({
          url:"getheading", 
          type: "post",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      // mandatory
          data: {
              hid:lid,
              
              
          },
          success: function(response) {
              console.log(response);
              if (response.status=="success") {
                      $('#heading').val(response.data.heading);
                     
                      
                   
                                 
                  
              } 
          },
          error: function(jqXHR, textStatus, errorThrown) {
              event.preventDefault();
          }
      }); //end ajax
  




   });

   $(document).on('click', '.resheduledfollowup', function()
   {
       var fid=$(this).attr("data-followupid");
     //alert(fid); 
       $.ajax({
           url:"getfollowdetails", 
           type: "post",
           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
       // mandatory
           data: {
               fid:fid,
               
               
           },
           success: function(response) {
            
               if (response.status=="success") {
                //console.log(response.data[0].fid);

                       $('#fid').val(response.data[0].fid);
                       $('#customername').val(response.data[0].customername);
                       $('#orginazation').val(response.data[0].companyname);
                       $('#phone').val(response.data[0].phone);
                       $('#email').val(response.data[0].email);
                       $('#project').val(response.data[0].project);
                       $('#leadid').val(response.data[0].leadid);
                       $('#typeofollowup').val(response.data[0].typeoffollowup);
                      
                      
                       
                    
                                  
                   
               } 
           },
           error: function(jqXHR, textStatus, errorThrown) {
               event.preventDefault();
           }
       }); //end ajax
   
 
 
 
 
    });

    $('#updatereshaduled').click(function(){
       // alert("fdgvjhdgk");

       $.ajax({
        url:"updateresheduledfolloup", 
        type: "post",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	// mandatory
        data: {
            fid:$('#fid').val(),
            typeoffollowup:$('#typeofollowup').val(),
            nextfollowup:$('#nextfollowup').val(),
            customername:$('#customername').val(),
            phone:$('#phone').val(),
            email:$('#email').val(),
            project:$('#project').val(),
            companyname:$('#orginazation').val(),
            leadid:$('#leadid').val(),


            // 'leadid'=>$request->leadidno,
            //                     'typeoffollowup'=>$request->follouptype,
            //                     'nextfollowup'=>$request->nextfollowup,
            //                     'customername'=>$request->customername,
            //                     'phone'=>$request->phone,
            //                     'email'=>$request->email,
            //                     'project'=>$request->project,
            //                     'companyname'=>$request->company,
            
            
        },
        success: function(response) {
            console.log(response);
            if (response.status=="success") {

                      alert(response.message);
                      location.reload(true);         
                
            } 
        },
        error: function(jqXHR, textStatus, errorThrown) {
            event.preventDefault();
        }
    }); //end ajax
    });





   
    


});