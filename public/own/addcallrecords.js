$(document).ready(function () {
    //alert("mdfgbjdfg");

        function changeleadstatus($val,$route){
            // alert($val)
            var status=$val;
            var routes=$route;
           // alert(routes);
            // var route = $(this).data('route');
            $.ajax({
                url:routes, 
                type: "post",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            // mandatory
                data: {
                    status:status,
                    
                    
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


        }
        //selectgroup-button
       
        $('#LeadInitiated').click(function () {
            if ($(this).is(':checked')) {
                // alert("LeadInitiated" +$(this).val());
             
                var route = $(this).data('route');
                
                changeleadstatus($(this).val(),route);

            }
            
        });

        $('#ProposalSent').click(function () {
            if ($(this).is(':checked')) {
                // alert("ProposalSent");
                // alert($(this).val());
                var route = $(this).data('route');
                
                changeleadstatus($(this).val(),route);
            }
            
        });

        $('#Discussion').click(function () {
            if ($(this).is(':checked')) {
                var route = $(this).data('route');
                
                changeleadstatus($(this).val(),route);
            }
            
        });

        $('#FollowupMode').click(function () {
            if ($(this).is(':checked')) {
                var route = $(this).data('route');
                
                changeleadstatus($(this).val(),route);
            }
            
        });
        $('#Closed').click(function () {
            if ($(this).is(':checked')) {
                var route = $(this).data('route');
                
                changeleadstatus($(this).val(),route);
            }
            
        });

        //Closed


    $('#showcallnotes').click(function(e){
      //  alert("dsfhgsdj");
           $('#addnotespanel').show();
    });

    $('#closenotes,#closenotesemail,#closenotesfollows').click(function(e){
        //  alert("dsfhgsdj");
             $('#addnotespanel').hide();
             $('#addmailpanel').hide();
             $('#addefollowuppanel').hide();
      });

      $('#addemails').click(function(e){
       //  alert("dsfhgsdj");
             $('#addmailpanel').show();
      });


      $('#addefollowup').click(function(e){
        //  alert("dsfhgsdj");
              $('#addefollowuppanel').show();
       });
 

      //addefollowup
    //
    //

    //addcallnotes_model
    $(document).on('click', '.addcallnotes_model', function()
    {
        var lid=$(this).attr("data-lid");
        //alert(lid); 
        $.ajax({
            url:"getleaddata", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                lid:lid,
                
                
            },
            success: function(response) {
              
                if (response.status=="success") {
                //  alert(response.data.ogrinazation);
                  // console.log(response.data[0].orginazation);
                        $('#tesing').val(response.data.ogrinazation);
                        $('#tesing1').text(response.data.ogrinazation);
                        $('#id').text(response.data.leadid );
                        
                     
                                   
                    
                } 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax
    




     });


    $('#addcallnotesmmm').click(function (e) { 
    // $('#addcallnotes').click(function (e) { 
        e.preventDefault();
       // alert("dfddd");
       var route = $(this).data('route');
            $.ajax({
            // url:"recordcall", 
            url:route, 
            // url:"recordcallnotes",
            // url: '{{ route("admin.recordcallnotes", ["id" => $("#leadidno").val()]) }}', 
            // url: '{{ route("admin.recordcallnotes", ["id" => $("#leadidno").val()]) }}', 
                 //url:route, 
                type: "post",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            // mandatory
                data: {
                    leadid:$('#leadidno').val(),
                    calltitle:$('#calltitle').val(),
                    startingcall:$('#startingcall').val(),
                    endingcall:$('#endingcall').val(),
                    callnotes:$('#callnotes').val(),
                    nextfolloup:$('#nextfolloup').val(),
                    
                    
                },
                success: function(response) {
                   // console.log(response);
                    $('#u_calltitle').text("");
                    $('#u_startingcall').text("");
                    $('#u_endingcall').text("");
                    $('#u_callnotes').text("");
                    $('#u_nextfolloup').text("");
                    if (response.status=="0") {
                        $.each(response.message, function (index, value) {


                            if(index=="calltitle"){
                                $('#u_calltitle').text(value);
                            }
                            if(index=="startingcall"){
                                $('#u_startingcall').text(value);
                            }
                            if(index=="endingcall"){
                                $('#u_endingcall').text(value);
                            }
                            if(index=="callnotes"){
                                $('#u_callnotes').text(value);
                            }
                            if(index=="nextfolloup"){
                                $('#u_nextfolloup').text(value);
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


      //addmailnotes
      $('#addmailnotes').click(function (e) { 
       
            e.preventDefault();
          // alert("dfddd");
          var route = $(this).data('route');
                $.ajax({
                // url:"recordcall", 
                // url:"addemailnotes", 
                // url:"addemailnotes", 
                url:route, 
                    type: "post",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                // mandatory
                    data: {
                        leadidno:$('#leadidno').val(),
                        mailtitle:$('#mailtitle').val(),
                        mailsenddate:$('#mailsenddate').val(),
                        nextfollowupemail:$('#nextfollowupemail').val(),
                     
                        
                        
                    },
                    success: function(response) {
                       // console.log(response);
                        $('#u_mailtitle').text("");
                        $('#u_mailsenddate').text("");
                        $('#u_nextfollowupemail').text("");
                       
                        if (response.status=="0") {
                            $.each(response.message, function (index, value) {
    
    
                                if(index=="mailtitle"){
                                    $('#u_mailtitle').text(value);
                                }
                                if(index=="mailsenddate"){
                                    $('#u_mailsenddate').text(value);
                                }
                                if(index=="nextfollowupemail"){
                                    $('#u_nextfollowupemail').text(value);
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

      //addcallnotes_model

      
    // $('#addcallnotes_model').click(function (e) { 
    //     // $('#addcallnotes').click(function (e) { 
    //         e.preventDefault();
    //        // alert("dfddd");
    
    //             $.ajax({
    //             // url:"recordcall", 
    //             url:"recordcallnotes", 
    //                 type: "post",
    //                 headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //             // mandatory
    //                 data: {
    //                     leadid:$('#leadidno').val(),
    //                     calltitle:$('#calltitle').val(),
    //                     startingcall:$('#startingcall').val(),
    //                     endingcall:$('#endingcall').val(),
    //                     callnotes:$('#callnotes').val(),
                        
                        
    //                 },
    //                 success: function(response) {
    //                    // console.log(response);
    //                     $('#u_calltitle').text("");
    //                     $('#u_startingcall').text("");
    //                     $('#u_endingcall').text("");
    //                     $('#u_callnotes').text("");
    //                     if (response.status=="0") {
    //                         $.each(response.message, function (index, value) {
    
    
    //                             if(index=="calltitle"){
    //                                 $('#u_calltitle').text(value);
    //                             }
    //                             if(index=="startingcall"){
    //                                 $('#u_startingcall').text(value);
    //                             }
    //                             if(index=="endingcall"){
    //                                 $('#u_endingcall').text(value);
    //                             }
    //                             if(index=="callnotes"){
    //                                 $('#u_callnotes').text(value);
    //                             }
                                                
    //                            });
                                           
                            
    //                     } 
    //                     else if(response.status=="success"){
    //                         alert(response.message);
    //                         location.reload(true);
    //                     }else if(response.status=="failuer"){
    //                         alert(response.message);
    //                         location.reload(true);
    //                     }
    //                 },
    //                 error: function(jqXHR, textStatus, errorThrown) {
    //                     event.preventDefault();
    //                 }
    //             }); //end ajax
    //       });

          //addfollowupsnotes
          $('#addfollowupsnotes').click(function (e) { 


            // $('#addcallnotes').click(function (e) { 
                e.preventDefault();

                // alert("fdsgjhsdg");
           // alert($('#follouptype').val());
           var route = $(this).data('route');
                    $.ajax({
                    // url:"recordcall", 
                    // url:"addfollowupnotes", 
                    url:route, 
                        type: "post",
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    // mandatory
                        data: {
                            leadidno:$('#leadidno').val(),
                            follouptype:$('#follouptype').val(),
                            nextfollowup:$('#nextfollowup').val(),
                            customername:$('#customername').val(),
                            company:$('#orginazation').val(),
                            phone:$('#phones').val(),
                            email:$('#emailss').val(),
                            project:$('#project').val(),
                            followupnotes:$('#followupnotes').val(),
                            teamid:$('#teamid').val(),
                            teamname:$('#teamname').val(),
                          
                            
                            
                            
                        },
                        success: function(response) {
                           // console.log(response);
                            $('#u_follouptype').text("");
                            $('#u_nextfollowup').text("");
                            $('#u_followupnotes').text("");
                           
                            if (response.status=="0") {
                                $.each(response.message, function (index, value) {
        
        
                                    if(index=="follouptype"){
                                        $('#u_follouptype').text(value);
                                    }
                                    if(index=="nextfollowup"){
                                        $('#u_nextfollowup').text(value);
                                    }

                                    if(index=="followupnotes"){
                                        $('#u_followupnotes').text(value);
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



          

              $('#changeleadstagevalue').click(function (e) { 


                // $('#addcallnotes').click(function (e) { 
                    e.preventDefault();
    
                    // alert("fdsgjhsdg");
               // alert($('#follouptype').val());
               var route = $(this).data('route');
                        $.ajax({
                        // url:"recordcall", 
                        // url:"addfollowupnotes", 
                        url:route, 
                            type: "post",
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        // mandatory
                            data: {
                                leadidno:$('#leadidno').val(),
                                leadstage:$('#leadstage').val(),
                              
                                
                                
                                
                            },
                            success: function(response) {
                               // console.log(response);
                                $('#u_follouptype').text("");
                             
                               
                                if (response.status=="0") {
                                    $.each(response.message, function (index, value) {
            
            
                                        if(index=="follouptype"){
                                            $('#u_follouptype').text(value);
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



              $('#shedulefollup').click(function (e) { 


                // $('#addcallnotes').click(function (e) { 
                    e.preventDefault();
    
                  
               // alert($('#follouptype').val());
             
                        $.ajax({
                      
                        url:"dashboard/reshedulefolloup", 
                            type: "post",
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        // mandatory
                            data: {
                                leadidno:$('#leadidno').val(),
                                fid:$('#fid').val(),
                                follouptype:$('#followuptypes').val(),
                                sheduledfollowupdate:$('#shedulefollowup').val(),
                                customername:$('#customernames').val(),
                                company:$('#orginazations').val(),
                                phone:$('#phones').val(),
                                email:$('#emailss').val(),
                                project:$('#project').val(),
                                followupnotes:$('#reshedulefollowupnotes').val(),
                                teamid:$('#teamid').val(),
                                teamname:$('#teamname').val(),
                              
                                
                                
                                
                            },
                            success: function(response) {
                               // console.log(response);
                                $('#u_shedulefollowup').text("");
                                $('#u_reshedulefollowupnotes').text("");
                             
                               
                                if (response.status=="0") {
                                    $.each(response.message, function (index, value) {
            
            
                                        if(index=="sheduledfollowupdate"){
                                            $('#u_shedulefollowup').text(value);
                                        }
                                        if(index=="followupnotes"){
                                            $('#u_reshedulefollowupnotes').text(value);
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

                  $('#shedulefollups').click(function (e) { 


                    // $('#addcallnotes').click(function (e) { 
                        e.preventDefault();
        
                     
                   // alert($('#follouptype').val());
                 
                            $.ajax({
                          
                            url:"reshedulefolloup", 
                                type: "post",
                                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            // mandatory
                                data: {
                                    leadidno:$('#leadidno').val(),
                                    fid:$('#fid').val(),
                                    follouptype:$('#followuptypes').val(),
                                    sheduledfollowupdate:$('#shedulefollowup').val(),
                                    customername:$('#customernames').val(),
                                    company:$('#orginazations').val(),
                                    phone:$('#phones').val(),
                                    email:$('#emailss').val(),
                                    project:$('#project').val(),
                                    followupnotes:$('#reshedulefollowupnotes').val(),
                                    teamid:$('#teamid').val(),
                                    teamname:$('#teamname').val(),
                                  
                                    
                                    
                                    
                                },
                                success: function(response) {
                                   // console.log(response);
                                    $('#u_shedulefollowup').text("");
                                    $('#u_reshedulefollowupnotes').text("");
                                 
                                   
                                    if (response.status=="0") {
                                        $.each(response.message, function (index, value) {
                
                
                                            if(index=="sheduledfollowupdate"){
                                                $('#u_shedulefollowup').text(value);
                                            }
                                            if(index=="followupnotes"){
                                                $('#u_reshedulefollowupnotes').text(value);
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

              
              


              $('#reshedule').click(function (e) { 


                // $('#addcallnotes').click(function (e) { 
                    e.preventDefault();
    
                    //alert("fdsgjhsdg");
               // alert($('#follouptype').val());
               var route = $(this).data('route');
                        $.ajax({
                        // url:"recordcall", 
                        // url:"addfollowupnotes", 
                        url:route, 
                            type: "post",
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        // mandatory
                            data: {
                                leadidno:$('#leadidno').val(),
                                follouptype:$('#follouptype').val(),
                                nextfollowup:$('#nextfollowup').val(),
                                customername:$('#customername').val(),
                                company:$('#orginazation').val(),
                                phone:$('#phones').val(),
                                email:$('#emailss').val(),
                                project:$('#project').val(),
                                followupnotes:$('#followupnotes').val(),
                                teamid:$('#teamid').val(),
                                teamname:$('#teamname').val(),
                              
                                
                                
                                
                            },
                            success: function(response) {
                               // console.log(response);
                                $('#u_follouptype').text("");
                                $('#u_nextfollowup').text("");
                                $('#u_followupnotes').text("");
                               
                                if (response.status=="0") {
                                    $.each(response.message, function (index, value) {
            
            
                                        if(index=="follouptype"){
                                            $('#u_follouptype').text(value);
                                        }
                                        if(index=="nextfollowup"){
                                            $('#u_nextfollowup').text(value);
                                        }
    
                                        if(index=="followupnotes"){
                                            $('#u_followupnotes').text(value);
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


                  $(document).on('click', '.reshedulefollowup', function()
                  {
                      var fid=$(this).attr("data-fid");
                     //  alert(fid); 
                      // return false;
                      $.ajax({
                          url:"dashboard/viewleadforreshedule", 
                          type: "post",
                          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                      // mandatory
                          data: {
                              fid:fid,
                              
                              
                          },
                          success: function(response) {
                           
                              if (response.status=="success") {
                               console.log(response.data[0].leadid);
                               $('#leadidno').val(response.data[0].leadid);
                               $('#fid').val(response.data[0].fid);
                               $('#customernames').val(response.data[0].customername);
                               $('#orginazations').val(response.data[0].companyname);
                               $('#phones').val(response.data[0].phone);
                               $('#emailss').val(response.data[0].email);
                               $('#project').val(response.data[0].project);
                               $('#teamid').val(response.data[0].teamid);
                              $('#teamname').val(response.data[0].teamnames);
                              $("#followuptypes option[value="+response.data[0].typeoffollowup+"]").attr('selected', 'selected'); 
                       







                            //    <input type="text" class="form-control" id="customername" name="customername"  placeholder="Call Title">
                            //    <input type="text" class="form-control" id="orginazation" name="orginazation"  placeholder="Call Title">
                            //    <input type="text" class="form-control" id="phones" name="phones"  placeholder="Call Title">
                            //    <input type="text" class="form-control" id="emailss" name="emailss" placeholder="Call Title">
                            //    <input type="text" class="form-control" id="project" name="project"  placeholder="Call Title">
                            //    <input type="text" class="form-control" id="teamid" name="project"  placeholder="Call ownerid">
                            //    <input type="text" class="form-control" id="teamname" name="project"  placeholder="Call ownerid">
                  
                                //  alert(response.message);
                                //  location.reload(true);
                                     
                                     
                                      
                                   
                                                 
                                  
                              } 
                          },
                          error: function(jqXHR, textStatus, errorThrown) {
                              event.preventDefault();
                          }
                      }); //end ajax
                  
                  
                  
                  
                  
                   });

                   $(document).on('click', '.reshedulefollowup', function()
                   {
                       var fid=$(this).attr("data-fid");
                      //  alert(fid); 
                       // return false;
                       $.ajax({
                           url:"viewleadforreshedule", 
                           type: "post",
                           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                       // mandatory
                           data: {
                               fid:fid,
                               
                               
                           },
                           success: function(response) {
                            
                               if (response.status=="success") {
                                console.log(response.data[0].leadid);
                                $('#leadidno').val(response.data[0].leadid);
                                $('#fid').val(response.data[0].fid);
                                $('#customernames').val(response.data[0].customername);
                                $('#orginazations').val(response.data[0].companyname);
                                $('#phones').val(response.data[0].phone);
                                $('#emailss').val(response.data[0].email);
                                $('#project').val(response.data[0].project);
                                $('#teamid').val(response.data[0].teamid);
                               $('#teamname').val(response.data[0].teamnames);
                               $("#followuptypes option[value="+response.data[0].typeoffollowup+"]").attr('selected', 'selected'); 
                        
 
 
 
 
 
 
 
                             //    <input type="text" class="form-control" id="customername" name="customername"  placeholder="Call Title">
                             //    <input type="text" class="form-control" id="orginazation" name="orginazation"  placeholder="Call Title">
                             //    <input type="text" class="form-control" id="phones" name="phones"  placeholder="Call Title">
                             //    <input type="text" class="form-control" id="emailss" name="emailss" placeholder="Call Title">
                             //    <input type="text" class="form-control" id="project" name="project"  placeholder="Call Title">
                             //    <input type="text" class="form-control" id="teamid" name="project"  placeholder="Call ownerid">
                             //    <input type="text" class="form-control" id="teamname" name="project"  placeholder="Call ownerid">
                   
                                 //  alert(response.message);
                                 //  location.reload(true);
                                      
                                      
                                       
                                    
                                                  
                                   
                               } 
                           },
                           error: function(jqXHR, textStatus, errorThrown) {
                               event.preventDefault();
                           }
                       }); //end ajax
                   
                   
                   
                   
                   
                    });



                   
                  $(document).on('click', '.closefollowup', function()
                  {
                      var fid=$(this).attr("data-fid");
                    //   alert(fid); 
                    //   return false;
                      $.ajax({
                          url:"dashboard/viewleadforreshedule", 
                          type: "post",
                          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                      // mandatory
                          data: {
                              fid:fid,
                              
                              
                          },
                          success: function(response) {
                           
                              if (response.status=="success") {
                               console.log(response.data[0].leadid);
                               $('#leadidno').val(response.data[0].leadid);
                            
                       







                            //    <input type="text" class="form-control" id="customername" name="customername"  placeholder="Call Title">
                            //    <input type="text" class="form-control" id="orginazation" name="orginazation"  placeholder="Call Title">
                            //    <input type="text" class="form-control" id="phones" name="phones"  placeholder="Call Title">
                            //    <input type="text" class="form-control" id="emailss" name="emailss" placeholder="Call Title">
                            //    <input type="text" class="form-control" id="project" name="project"  placeholder="Call Title">
                            //    <input type="text" class="form-control" id="teamid" name="project"  placeholder="Call ownerid">
                            //    <input type="text" class="form-control" id="teamname" name="project"  placeholder="Call ownerid">
                  
                                //  alert(response.message);
                                //  location.reload(true);
                                     
                                     
                                      
                                   
                                                 
                                  
                              } 
                          },
                          error: function(jqXHR, textStatus, errorThrown) {
                              event.preventDefault();
                          }
                      }); //end ajax
                  
                  
                  
                  
                  
                   });






                  


});