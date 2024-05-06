 $(document).ready(function(){

    
        // $("#dealsearch").on("keyup", function() {
        //   var value = $(this).val().toLowerCase();
        //   $("#myTable tr").filter(function() {
        //     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        //   });
        // });
    


    $('#close').click(function (e) { 
        e.preventDefault();
      location.reload(true);
        
    });

    //deleteleadbyid
    // from index lead strip
    $('#deleteleadbyid').click(function (e){


        $.ajax({
            url:"dashboard/deleteleaddata", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                lid:$('#id').text(),
              
             
                
                
            },
            success: function(response) {
                // console.log(response.data.leadid);
              
                if (response.status=="success") {

               //   alert(response.message);

                  $.toast({
                    heading: 'Success',
                    text: response.message,
                    position: 'mid-center',
                    stack: false,
                    icon: 'success',
                    hideAfter: 1000 ,
                    afterHidden: function () {
                        location.reload(true);
                    },


                })
                //  location.reload(true);
                    
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

    // from leads page
    $('#deleteleadbyids').click(function (e){


        $.ajax({
            url:"deleteleaddata", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                lid:$('#id').text(),
              
             
                
                
            },
            success: function(response) {
                // console.log(response.data.leadid);
              
                if (response.status=="success") {


                    $.toast({
                        heading: 'Success',
                        text: response.message,
                        position: 'mid-center',
                        stack: false,
                        icon: 'success',
                        hideAfter: 1000 ,
                        afterHidden: function () {
                            location.reload(true);
                        },


                    })

                 

                 
                    
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


    $('#convertdeal').click(function (e){


        $.ajax({
            url:"dashboard/convertleadtodeal", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                lid:$('#leadid').val(),
                amount:$('#currency').val(),
                expecteddate:$('#expecteddate').val(),
                requirements:$('#contents').val(),
                team:$('#assignedteam').val(),
                dealfixdata:$('#dealfixdata').val(),
             
                
                
            },
            success: function(response) {
                // console.log(response.data.leadid);
                $('#e_currency').text("");
                $('#e_expecteddate').text("");
                $('#e_contents').text("");
                $('#e_assignedteam').text("");
                if (response.status=="0") {

                    $.each(response.message, function (index, value) {


                        if(index=="amount"){
                            $('#e_currency').text(value);
                        }
                        if(index=="expecteddate"){
                            $('#e_expecteddate').text(value);
                        }
                        if(index=="requirements"){
                            $('#e_contents').text(value);
                        }
                        if(index=="team"){
                            $('#e_assignedteam').text(value);
                        }
                                        
                       });
                    
                } else if(response.status=="success"){

                    // alert(response.message);
                    $.toast({
                        heading: 'Success',
                        text: response.message,
                        position: 'mid-center',
                        stack: false,
                        icon: 'success',
                        hideAfter: 1000 ,
                        afterHidden: function () {
                            location.reload(true);
                            // window.location.href = "http://localhost:8000/dashboard"
                        },


                    })


                    // location.reload(true);
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


    // for all
    
    $('#convertdealdata').click(function (e){


        $.ajax({
            url:"convertleadtodeal", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                lid:$('#leadid').val(),
                amount:$('#currency').val(),
                expecteddate:$('#expecteddate').val(),
                requirements:$('#contents').val(),
                team:$('#assignedteam').val(),
                dealfixdata:$('#dealfixdata').val(),
             
                
                
            },
            success: function(response) {
                // console.log(response.data.leadid);
                $('#e_currency').text("");
                $('#e_expecteddate').text("");
                $('#e_contents').text("");
                $('#e_assignedteam').text("");
                if (response.status=="0") {

                    $.each(response.message, function (index, value) {


                        if(index=="amount"){
                            $('#e_currency').text(value);
                        }
                        if(index=="expecteddate"){
                            $('#e_expecteddate').text(value);
                        }
                        if(index=="requirements"){
                            $('#e_contents').text(value);
                        }
                        if(index=="team"){
                            $('#e_assignedteam').text(value);
                        }
                                        
                       });
                    
                } else if(response.status=="success"){

                    $.toast({
                        heading: 'Success',
                        text: response.message,
                        position: 'mid-center',
                        stack: false,
                        icon: 'success',
                        hideAfter: 1000 ,
                        afterHidden: function () {
                            // window.location.href = "http://localhost:8000/dashboard"
                            location.reload(true);
                        },


                    })

                    // alert(response.message);
                  
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

   
    // from index strip
    $('#updatelead').click(function (e){

       // alert("dfghfd");
        $.ajax({
            url:"dashboard/updateleads", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                lid:$('#ulid').val(),
                u_customer:$('#u_customer').val(),
                u_Orginazation:$('#u_Orginazation').val(),
                u_title:$('#u_title').val(),
                u_Description:$('#u_Description').val(),
                u_mobile:$('#tellphone').val(),
                u_email:$('#u_email').val(),
                leadlabel:$('#leadlabel').val(),
                price:$('#price').val(),
                leadowner:$("#leadowner :selected").text(),
                city:$('#city').val(),
                leadsource:$('#u_leadsource').val(),
                // leadsource:$('input[name="options"]:checked').val(),
                ownerid:$("#leadowner :selected").val(),

           
                // not mandatory
                // u_amount:$('#u_amount').val(),
                // u_leadsource:$('#u_leadsource').val(),
                // u_Priotity:$('#u_Priotity').val(),
                // u_owner:$('#u_owner').val(),
                // u_ownername:$("#u_owner :selected").text(),
            
                               

                // u_address1:$('#u_address1').val(),
                // u_address2:$('#u_address2').val(),
                // u_address3:$('#u_address3').val(),
                // u_city:$('#u_city').val(),
                // u_state:$('#u_state').val(),
                // u_zipcode:$('#u_zipcode').val(),
                // u_country:$('#u_country').val(),




                
                
                
            },
            success: function(response) {
                // console.log(response.data.leadid);
                $('#ue_customer').text("");
                $('#ue_Orginazation').text("");
                $('#ue_title').text("");
                $('#ue_Description').text("");
                $('#ue_mobile').text("");
                $('#ue_email').text("");
                $('#e_leadsource').text("");
                $('#ue_price').text("");
                $('#ue_city').text("");


                if (response.status=="0") {

                    $.each(response.message, function (index, value) {


                        if(index=="u_customer"){
                            $('#ue_customer').text(value);
                        }
                        if(index=="u_Orginazation"){
                            $('#ue_Orginazation').text(value);
                        }
                        if(index=="u_title"){
                            $('#ue_title').text(value);
                        }
                        if(index=="u_Description"){
                            $('#ue_remarks').text(value);
                        }
                        if(index=="u_mobile"){
                            $('#ue_mobile').text(value);
                        }
                        if(index=="u_email"){
                            $('#ue_email').text(value);
                        }
                        if(index=="u_leadsource"){
                            $('#e_leadsource').text(value);
                        }

                        // leadlabel
                        // price
                        // leadowner
                        // city

                       
                        if(index=="price"){
                            $('#ue_price').text(value);
                        }
                        if(index=="leadowner"){
                            $('#ue_leadowner').text(value);
                        }
                        if(index=="city"){
                            $('#ue_city').text(value);
                        }

                        //u_leadsource
                                        
                       });
                    
                } else if(response.status=="success"){
                    // alert(response.message);

                    $.toast({
                        heading: 'Success',
                        text: response.message,
                        position: 'mid-center',
                        stack: false,
                        icon: 'success',
                        hideAfter: 1000 ,
                        afterHidden: function () {
                            location.reload(true);
                        },


                    })

                  
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

    // from lead page

    $('#updateleaddata').click(function (e){

        // alert("dfghfd");
         $.ajax({
             url:"updateleads", 
             type: "post",
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         // mandatory
             data: {
                 lid:$('#ulid').val(),
                 u_customer:$('#u_customer').val(),
                 u_Orginazation:$('#u_Orginazation').val(),
                 u_title:$('#u_title').val(),
                 u_Description:$('#u_Description').val(),
                 u_mobile:$('#tellphone').val(),
                 u_email:$('#u_email').val(),
                 leadlabel:$('#leadlabel').val(),
                 price:$('#price').val(),
                 leadowner:$("#leadowner :selected").text(),
                 city:$('#city').val(),
                 leadsource:$('#u_leadsource').val(),
                // leadsources : $('input[type=radio][name=options]:checked').val(),
                 ownerid:$("#leadowner :selected").val(),
 
            
                 // not mandatory
                 // u_amount:$('#u_amount').val(),
                 // u_leadsource:$('#u_leadsource').val(),
                 // u_Priotity:$('#u_Priotity').val(),
                 // u_owner:$('#u_owner').val(),
                 // u_ownername:$("#u_owner :selected").text(),
             
                                
 
                 // u_address1:$('#u_address1').val(),
                 // u_address2:$('#u_address2').val(),
                 // u_address3:$('#u_address3').val(),
                 // u_city:$('#u_city').val(),
                 // u_state:$('#u_state').val(),
                 // u_zipcode:$('#u_zipcode').val(),
                 // u_country:$('#u_country').val(),
 
 
 
 
                 
                 
                 
             },
             success: function(response) {
                 // console.log(response.data.leadid);
                 $('#ue_customer').text("");
                 $('#ue_Orginazation').text("");
                 $('#ue_title').text("");
                 $('#ue_Description').text("");
                 $('#ue_mobile').text("");
                 $('#ue_email').text("");
                 $('#e_leadsource').text("");
                 $('#ue_price').text("");
                 $('#ue_city').text("");
 
 
                 if (response.status=="0") {
 
                     $.each(response.message, function (index, value) {
 
 
                         if(index=="u_customer"){
                             $('#ue_customer').text(value);
                         }
                         if(index=="u_Orginazation"){
                             $('#ue_Orginazation').text(value);
                         }
                         if(index=="u_title"){
                             $('#ue_title').text(value);
                         }
                         if(index=="u_Description"){
                             $('#ue_remarks').text(value);
                         }
                         if(index=="u_mobile"){
                             $('#ue_mobile').text(value);
                         }
                         if(index=="u_email"){
                             $('#ue_email').text(value);
                         }
                         if(index=="u_leadsource"){
                             $('#e_leadsource').text(value);
                         }
 
                         // leadlabel
                         // price
                         // leadowner
                         // city
 
                        
                         if(index=="price"){
                             $('#ue_price').text(value);
                         }
                         if(index=="leadowner"){
                             $('#ue_leadowner').text(value);
                         }
                         if(index=="city"){
                             $('#ue_city').text(value);
                         }
 
                         //u_leadsource
                                         
                        });
                     
                 } else if(response.status=="success"){
                    //  alert(response.message);
                    //  location.reload(true);

                     $.toast({
                        heading: 'Success',
                        text: response.message,
                        position: 'mid-center',
                        stack: false,
                        icon: 'success',
                        hideAfter: 1000 ,
                        afterHidden: function () {
                            location.reload(true);
                        },


                    })
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

    
    

    $('#updateremarks').click(function (e){

        // alert("dfghfd");
         $.ajax({
             url:"updateremarks", 
             type: "post",
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         // mandatory
             data: {
                 lid:$('#leadids').val(),
                 leadremarks:$('#addremarks').val(),
                 leadcomments:$('#comments').val(),
                 
             },
             success: function(response) {
                 // console.log(response.data.leadid);
             
 
 
                 if(response.status=="success"){
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

     
    $('#updatedeals').click(function (e){


         $.ajax({
             url:"dashboard/updatedeals", 
             type: "post",
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         // mandatory
             data: {
                leadid:$('#leadidd').val(),
                customer:$('#customername').val(),
                Orginazation:$('#Orginazationname').val(),
                email:$('#emailid').val(),
                phone:$('#phoneno').val(),
                currency:$('#currencyvalue').val(),
                expecteddate:$('#expecteddates').val(),
               
                contentss:$('#contentss').val(),
                dealfixdate:$('#dealfixdates').val(),
                city:$('#cityss').val(),
                 
             },
             success: function(response) {
                 // console.log(response.data.leadid);
                 $('#uu_customer').text("");
                 $('#uu_Orginazation').text("");
                 $('#uu_email').text("");
                 $('#uu_phone').text("");
                 $('#uu_currency').text("");
                 $('#uu_assignedteam').text("");
                 $('#uu_contentss').text("");
                 
                 if(response.status=="0"){
                    $.each(response.message, function (index, value) {


                        if(index=="customer"){
                            $('#uu_customer').text(value);
                        }
                        if(index=="Orginazation"){
                            $('#uu_Orginazation').text(value);
                        }
                        if(index=="email"){
                            $('#uu_email').text(value);
                        }
                        if(index=="phone"){
                            $('#uu_phone').text(value);
                        }
                        if(index=="currency"){
                            $('#uu_currency').text(value);
                        }
                        if(index=="assignedteam"){
                            $('#uu_assignedteam').text(value);
                        }
                        if(index=="contentss"){
                            $('#uu_contentss').text(value);
                        }
                                        
                       });





                }
 
 
                 else if(response.status=="success"){
                    //  alert(response.message);
                    


                     $.toast({
                        heading: 'Success',
                        text: response.message,
                        position: 'mid-center',
                        stack: false,
                        icon: 'success',
                        hideAfter: 1000 ,
                        afterHidden: function () {
                            location.reload(true);
                        },


                    })

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


     // FROM LEADS PAGE
     $('#updatedealspage').click(function (e){


        $.ajax({
            url:"updatedeals", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
               leadid:$('#leadidd').val(),
               customer:$('#customername').val(),
               Orginazation:$('#Orginazationname').val(),
               email:$('#emailid').val(),
               phone:$('#phoneno').val(),
               currency:$('#currencyvalue').val(),
               expecteddate:$('#expecteddates').val(),
              
               contentss:$('#contentss').val(),
               dealfixdate:$('#dealfixdates').val(),
               city:$('#cityss').val(),
                
            },
            success: function(response) {
                // console.log(response.data.leadid);
                $('#uu_customer').text("");
                $('#uu_Orginazation').text("");
                $('#uu_email').text("");
                $('#uu_phone').text("");
                $('#uu_currency').text("");
                $('#uu_assignedteam').text("");
                $('#uu_contentss').text("");
                
                if(response.status=="0"){
                   $.each(response.message, function (index, value) {


                       if(index=="customer"){
                           $('#uu_customer').text(value);
                       }
                       if(index=="Orginazation"){
                           $('#uu_Orginazation').text(value);
                       }
                       if(index=="email"){
                           $('#uu_email').text(value);
                       }
                       if(index=="phone"){
                           $('#uu_phone').text(value);
                       }
                       if(index=="currency"){
                           $('#uu_currency').text(value);
                       }
                       if(index=="assignedteam"){
                           $('#uu_assignedteam').text(value);
                       }
                       if(index=="contentss"){
                           $('#uu_contentss').text(value);
                       }
                                       
                      });





               }


                else if(response.status=="success"){
                   
                    
                    $.toast({
                        heading: 'Success',
                        text: response.message,
                        position: 'mid-center',
                        stack: false,
                        icon: 'success',
                        hideAfter: 1000 ,
                        afterHidden: function () {
                            location.reload(true);
                        },


                    })


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

     
    //

        // for edit profile
    $(document).on('click', '.edit_emp_profile', function()
    {
        var lid=$(this).attr("data-pid");
        //alert(lid); 
        $.ajax({
            url:"getmyprofiledetails", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                pid:lid,
                
                
            },
            success: function(response) {
              
                if (response.status=="success") {
            //  alert(response.img);
                  // console.log(response.data[0].orginazation);
                 // var hostname = window.location.hostname;
                 var imagedata;
                //  var hostname = "localhost:8000";
                    if(response.img==null ){
                        var imagedata="https://preview.keenthemes.com//metronic8/demo1/assets/media/avatars/300-1.jpg";
                    }else{
                        var imagedata=response.img;  
                    }

                        $('#empname').val(response.data[0].fullname);
                        $('#empemail').val(response.data[0].email);
                        $('#empid').val(response.data[0].uid);
                        $('#phoneno').val(response.data[0].mobile);
                        $('#emppassword').val(response.data[0].password);
                        $('#Designation').val(response.data[0].designation);
                        $('#id').text(response.data.leadid );
                        $('#imgpaths').val(response.data[0].imagepath );
                        // $('.img-fluid').text(response.data.leadid );
                        // $('.img-fluid').attr('src', response.img);
                         $('#imageDiv').css('background-image', 'url(' + imagedata + ')');
                        
                     
                                   
                    
                } 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax
    




     });

     //update profile data
    //  $('#profileid').submit(function(e){
        
    //  $('#profileid').submit(function(e)
        
    //  $('#profileidssss').on('submit', function(e) {
        // $('#fsdfsdf').click(function(e){  
        
        
        // e.preventDefault();
        // alert("dskjgfsg")



        // var formId = '#profileidssss';
        // // var formData = new FormData($(formId)[0]);
        // var formData = new FormData(document.getElementById(formId));

     


        $('#profileidssss').on('submit', function(e){
            e.preventDefault();
            var formData = new FormData(this);
           
        $.ajax({
            url: 'updatemyprofiledetails',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Handle success response
                //  alert("okay")
                if(response.status==0){
                    $('#u_empname').text("");
                    $('#u_empemail').text("");
                    $('#u_phone').text("");
                    $('#u_emppassword').text("");
                    $('#u_Designation').text("");
                    $.each(response.message, function (index, value) {


                        if(index=="empname"){
                            $('#u_empname').text(value);
                        }
                        if(index=="empemail"){
                            $('#u_empemail').text(value);
                        }
                        if(index=="phoneno"){
                            $('#u_phone').text(value);
                        }
                        if(index=="emppassword"){
                            $('#u_emppassword').text(value);
                        }
                        if(index=="Designation"){
                            $('#u_Designation').text(value);
                        }
                                        
                       });


                       
                
                    }else if(response.status=="success")
                        {
                            // alert(response.message);

                            Swal.fire({
                                position: 'center',
                                 icon: "success",
                                // icon: data.icon,
                                title: response.message,
                                showConfirmButton: false,
                                timer: 1500
                            });
                           

                            location.reload(true);
                            
                        }

            },
            error: function(xhr, status, error) {
                // Handle error response
              //  alert("error")
              
            }
        });

     });

      //deletelead
     // from index laed strip
      $(document).on('click', '.deleteleadbyid', function()
      {
          var lid=$(this).attr("data-lid");
          //alert(lid); 
          $.ajax({
              url:"dashboard/getleaddata", 
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


       // from delete ops leads page
       $(document).on('click', '.deleteleadbyid', function()
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

       // testinfg
       $(document).on('click', '.clickme', function()
       {
           var lid=$(this).attr("data-ddid");
           alert(lid); 
           $.ajax({
               url:"viewleadspost", 
               type: "post",
               headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
           // mandatory
               data: {
                   lid:lid,
                   
                   
               },
               success: function(response) {
                   console.log(response);
                   if (response.status=="success") {
   
                     //  alert(response.data.phone)
                           $('#u_customer').val(response.data.customer);
                      
                          
                        
                                      
                       
                   } 
               },
               error: function(jqXHR, textStatus, errorThrown) {
                   event.preventDefault();
               }
           }); //end ajax
       
   
   
   
   
        });


  
//edit index from lead page
    $(document).on('click', '.eleadid', function()
    {
        // $('#u_customer').val("");
        var lid=$(this).attr("data-lid");
        let previousResponse = null;
        let previousResponse2 = null;
       //alert(lid); 
        $.ajax({
            url:"dashboard/getleaddata", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                lid:lid,
                
                
            },
           
            success: function(response) {
                console.log(response);
               

                if (response.status=="success") {
//id="leadlabel"
                    $('#u_leadsource').empty();
                    $('#u_title').empty();
                    $('#leadlabel').empty();
                    $('#leadowner').empty();

                previousResponse = response.data;
                previousResponse2 = response.data2;

                


                            $.each(response.data2, function(index, value) {
                                $('#u_leadsource').append($('<option>', {
                                    value: value.leadsource,
                                    text: value.leadsource
                                }));
                            });


                            $.each(response.projects, function(index, value) {
                              

                                $('#u_title').append($('<option>', {
                                    // value: "value.Project_Name",
                                    value:  value.Project_Name ,
                                    text:  value.Project_Name
                                }));
                            });
                            
                            $.each(response.labels, function(index, value) {
                                $('#leadlabel').append($('<option>', {
                                    value: value.labelname,
                                    text: value.labelname 
                                }));
                            });

                            $.each(response.liststaff, function(index, value) {
                                $('#leadowner').append($('<option>', {
                                    value: value.uid,
                                    text: value.fullname 
                                }));
                            });


                            // liststaff
                            
                            // console.log(previousResponse.title);

                            var previousleadsource = previousResponse.leadsource;
                            if (previousleadsource) {
                                // $("#u_leadsource_").val(previousLabel);
                                $("#u_leadsource option[value='"+previousResponse.leadsource+"']").attr('selected', 'selected'); 
                            }
                            var previousproject = previousResponse.title;
                            if (previousproject) {
                                // $("#u_leadsource_").val(previousLabel);
                                $("#u_title option[value='"+previousResponse.title+"']").attr('selected', 'selected'); 
                            }

                            var previouslabel = previousResponse.label;
                            if (previouslabel) {
                                // $("#u_leadsource_").val(previousLabel);
                                $("#leadlabel option[value='"+previousResponse.label+"']").attr('selected', 'selected'); 
                            }

                            var previousownerid = previousResponse.leadownerid;
                            if (previouslabel) {
                                // $("#u_leadsource_").val(previousLabel);
                                $("#leadowner option[value='"+previousResponse.leadownerid+"']").attr('selected', 'selected'); 
                            }
                        
                            
                
                        $('#u_customer').val(previousResponse.customer);
                        $('#u_Orginazation').val(previousResponse.ogrinazation);
                       
                        $('#u_email').val(previousResponse.email);
                        $('#tellphone').val(previousResponse.phone);
                      
                        $('#ulid').val(previousResponse.leadid);
                        $('#u_Description').val(previousResponse.description);
                        // $("#u_title option[value="+previousResponse.title+"]").attr('selected', 'selected'); 
                        $('#price').val(previousResponse.value);
                        $('#city').val(previousResponse.town);
                        // $('#u_title').val(response.data.title);
                        // $('input[name="options"]').filter('[value="' + previousResponse.leadsource + '"]').prop('checked', true);
                       
                        // $("#leadlabel option[value="+previousResponse.label+"]").attr('selected', 'selected'); 
                       
                        $('#u_Priotity').val(previousResponse.label);
                        // $('#u_owner').val(response.data.owner);
                        // $("#u_owner option[value="+response.data.owner+"]").attr('selected', 'selected'); 
                        $('#u_owner').val(previousResponse.owner);
                        //  $('#u_mobile_dd').val(response.data.phone);
                       
                        //$('#u_mobiles').val("dghsdf");
                        $('#u_email').val(previousResponse.email);
                        $('#u_address1').val(previousResponse.addressline_1);
                        $('#u_address2').val(previousResponse.addressline_2);
                        $('#u_address3').val(previousResponse.addressline_3);
                        $('#u_city').val(previousResponse.town);
                        $('#u_state').val(previousResponse.state);
                        $('#u_zipcode').val(previousResponse.zipcode);
                        $('#u_country').val(previousResponse.country);
                        //   $("#u_leadsource option[value="+previousResponse.leadsource+"]").attr('selected', 'selected'); 
                            // $("#u_owner option[value="+response.data.owner+"]").attr('selected', 'selected'); 
               
                            // var values = previousResponse2.data2; // Adjust accordingly based on your response structure
                            // console.log(previousResponse2[0].data2);
                            // // Populate the radio box with the received values
                            // $.each(previousResponse2[0].data2, function(index, value) {
                            //     // Assuming you have a radio box with id "radioBox"
                            //     $('#radioBox').append('<input type="radio" name="options" value="' + value + '">' + value + '<br>');
                            // });
                            

                            // nerw
                            // $("#u_title option[value="+response.data.title+"]").attr('selected', true); 
                            // $('#u_customer').val(response.data.customer);
                            // $('#u_email').val(response.data.email);
                            // $('#tellphone').val(response.data.phone);
                            // $("#leadlabel option[value="+response.data.label+"]").attr('selected', 'selected'); 
                            // $('#ulid').val(response.data.leadid);
                            // $('#u_Description').val(response.data.description);
                            // $('#u_Orginazation').val(response.data.ogrinazation);
                            // $('#price').val(response.data.value);
                            // $('#city').val(response.data.town);
                            // // $('#u_title').val(response.data.title);
                           
                          
                           
                            // $('#u_Priotity').val(response.data.label);
                            // // $('#u_owner').val(response.data.owner);
                            // // $("#u_owner option[value="+response.data.owner+"]").attr('selected', 'selected'); 
                            // $('#u_owner').val(response.data.owner);
                            // //  $('#u_mobile_dd').val(response.data.phone);
                           
                            // //$('#u_mobiles').val("dghsdf");
                            // $('#u_email').val(response.data.email);
                            // $('#u_address1').val(response.data.addressline_1);
                            // $('#u_address2').val(response.data.addressline_2);
                            // $('#u_address3').val(response.data.addressline_3);
                            // $('#u_city').val(response.data.town);
                            // $('#u_state').val(response.data.state);
                            // $('#u_zipcode').val(response.data.zipcode);
                            // $('#u_country').val(response.data.country);
                            //   $("#u_leadsource option[value="+response.data.leadsource+"]").attr('selected', 'selected'); 
                            //     // $("#u_owner option[value="+response.data.owner+"]").attr('selected', 'selected'); 
                   
                     
                                   
                    
                } 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax
    




     });

// from other all page
     $(document).on('click', '.eleadids', function()
     {
         var lid=$(this).attr("data-lid");
        // alert(lid); 
         $.ajax({
             url:"getleaddata", 
             type: "post",
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         // mandatory
             data: {
                 lid:lid,
                 
                 
             },
             success: function(response) {
                 console.log(response);
                 if (response.status=="success") {
 

                    $('#u_leadsource').empty();
                    $('#u_title').empty();
                    $('#leadlabel').empty();
                    $('#leadowner').empty();

                previousResponse = response.data;
                previousResponse2 = response.data2;

                


                            $.each(response.data2, function(index, value) {
                                $('#u_leadsource').append($('<option>', {
                                    value: value.leadsource,
                                    text: value.leadsource
                                }));
                            });


                            $.each(response.projects, function(index, value) {
                              

                                $('#u_title').append($('<option>', {
                                    // value: "value.Project_Name",
                                    value:  value.Project_Name ,
                                    text:  value.Project_Name
                                }));
                            });

                            $.each(response.liststaff, function(index, value) {
                                $('#leadowner').append($('<option>', {
                                    value: value.uid,
                                    text: value.fullname 
                                }));
                            });
                            
                            $.each(response.labels, function(index, value) {
                                $('#leadlabel').append($('<option>', {
                                    value: value.labelname,
                                    text: value.labelname 
                                }));
                            });

                            
                            // console.log(previousResponse.title);

                            var previousleadsource = previousResponse.leadsource;
                            if (previousleadsource) {
                                // $("#u_leadsource_").val(previousLabel);
                                $("#u_leadsource option[value='"+previousResponse.leadsource+"']").attr('selected', 'selected'); 
                            }
                            var previousproject = previousResponse.title;
                            if (previousproject) {
                                // $("#u_leadsource_").val(previousLabel);
                                $("#u_title option[value='"+previousResponse.title+"']").attr('selected', 'selected'); 
                            }

                            var previouslabel = previousResponse.label;
                            if (previouslabel) {
                                // $("#u_leadsource_").val(previousLabel);
                                $("#leadlabel option[value='"+previousResponse.label+"']").attr('selected', 'selected'); 
                            }
                        
                            var previousownerid = previousResponse.leadownerid;
                            if (previouslabel) {
                                // $("#u_leadsource_").val(previousLabel);
                                $("#leadowner option[value='"+previousResponse.leadownerid+"']").attr('selected', 'selected'); 
                            }


                 //    alert(response.data.phone)
                         $('#u_customer').val(response.data.customer);
                         $('#u_email').val(response.data.email);
                         $('#tellphone').val(response.data.phone);
                         $('#ulid').val(response.data.leadid);
                         $('#u_Description').val(response.data.description);
                         $('#u_Orginazation').val(response.data.ogrinazation);
                         $('#price').val(response.data.value);
                         $('#city').val(response.data.town);
                         // $('#u_title').val(response.data.title);
                        
                         
                       
                         //  $("#u_title option[value="+response.data.title+"]").attr('selected', 'selected'); 
                       
                        
                         $('#u_Priotity').val(response.data.label);
                         // $('#u_owner').val(response.data.owner);
                         // $("#u_owner option[value="+response.data.owner+"]").attr('selected', 'selected'); 
                         $('#u_owner').val(response.data.owner);
                         //  $('#u_mobile_dd').val(response.data.phone);
                        
                         //$('#u_mobiles').val("dghsdf");
                         $('#u_email').val(response.data.email);
                         $('#u_address1').val(response.data.addressline_1);
                         $('#u_address2').val(response.data.addressline_2);
                         $('#u_address3').val(response.data.addressline_3);
                         $('#u_city').val(response.data.town);
                         $('#u_state').val(response.data.state);
                         $('#u_zipcode').val(response.data.zipcode);
                         $('#u_country').val(response.data.country);
                           $("#u_leadsource option[value="+response.data.leadsource+"]").attr('selected', 'selected'); 
                             // $("#u_owner option[value="+response.data.owner+"]").attr('selected', 'selected'); 
                         
                      
                                    
                     
                 } 
             },
             error: function(jqXHR, textStatus, errorThrown) {
                 event.preventDefault();
             }
         }); //end ajax
     
 
 
 
 
      });



    //   {
    //       var lid=$(this).attr("data-lid");
    //      alert(lid); 
    //       $.ajax({
    //           url:"s/getleaddata", 
    //           type: "get",
    //           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //       // mandatory
    //           data: {
    //               lid:lid,
                  
                  
    //           },
    //           success: function(response) {
    //               console.log(response);
    //               if (response.status=="success") {
  
    //               //    alert(response.data.phone)
    //                       $('#u_customer').val(response.data.customer);
    //                       $('#u_email').val(response.data.email);
    //                       $('#tellphone').val(response.data.phone);
    //                       $('#ulid').val(response.data.leadid);
    //                       $('#u_Description').val(response.data.description);
    //                       $('#u_Orginazation').val(response.data.ogrinazation);
    //                       $('#price').val(response.data.value);
    //                       $('#city').val(response.data.town);
    //                       // $('#u_title').val(response.data.title);
    //                       $("#u_title option[value="+response.data.title+"]").attr('selected', 'selected'); 
                        
                         
    //                       $('#u_Priotity').val(response.data.label);
    //                       // $('#u_owner').val(response.data.owner);
    //                       // $("#u_owner option[value="+response.data.owner+"]").attr('selected', 'selected'); 
    //                       $('#u_owner').val(response.data.owner);
    //                       //  $('#u_mobile_dd').val(response.data.phone);
                         
    //                       //$('#u_mobiles').val("dghsdf");
    //                       $('#u_email').val(response.data.email);
    //                       $('#u_address1').val(response.data.addressline_1);
    //                       $('#u_address2').val(response.data.addressline_2);
    //                       $('#u_address3').val(response.data.addressline_3);
    //                       $('#u_city').val(response.data.town);
    //                       $('#u_state').val(response.data.state);
    //                       $('#u_zipcode').val(response.data.zipcode);
    //                       $('#u_country').val(response.data.country);
    //                         $("#u_leadsource option[value="+response.data.leadsource+"]").attr('selected', 'selected'); 
    //                           // $("#u_owner option[value="+response.data.owner+"]").attr('selected', 'selected'); 
                          
                       
                                     
                      
    //               } 
    //           },
    //           error: function(jqXHR, textStatus, errorThrown) {
    //               event.preventDefault();
    //           }
    //       }); //end ajax
      
  
  
  
  
    //    });


     $(document).on('click', '.addrearkslead', function()
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
                 console.log(response);
                 if (response.status=="success") {
                         $('#comments').val(response.data.lead_comments);
                         $('#leadids').val(response.data.leadid);
                         $("#addremarks option[value="+response.data.status+"]").attr('selected', 'selected'); 
                         $("#addremarks option[value="+response.data.status+"]").attr('selected', 'selected'); 
                     
                         
                      
                                    
                     
                 } 
             },
             error: function(jqXHR, textStatus, errorThrown) {
                 event.preventDefault();
             }
         }); //end ajax
     
 
 
 
 
      });



    $(document).on('click', '.leadid', function()
    {
        var lid=$(this).attr("data-lid");
       // alert(lid); 
        $.ajax({
            url:"dashboard/getleaddata", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                lid:lid,
                
                
            },
            success: function(response) {
                console.log(response);
                if (response.status=="success") {
                        $('#customer').val(response.data.customer);
                        $('#customername').val(response.data.customer);
                         $('#dealfixdate').val(response.data.dealfixdate);
                         $('#dealfixdatessss').val(response.data.dealfixdate);
                        $('#leadid').val(response.data.leadid);
                        // $('#leadidd').val(response.data.leadid);
                        $('#leadidd').val(response.data.leadid);
                        $('#Orginazation').val(response.data.ogrinazation);
                        $('#Orginazationname').val(response.data.ogrinazation);
                        $('#email').val(response.data.email);
                        $('#emailid').val(response.data.email);
                        $('#phone').val(response.data.phone);
                        $('#phoneno').val(response.data.phone);
                        // $('#currency').val(response.data.value);
                        $('#currency').val(response.data.value);
                        $('#currencyvalue').val(response.data.value);
                        $('#contentss').val(response.data.content);
                        $('#myLargeModalLabel').text("Convert Lead to Deal  Project Name - "+response.data.title);
                        // $('#expecteddates').val(response.data.expacteddate);
                        $('#expecteddates').val(response.data.expacteddate);
                        $('#cityss').val(response.data.town);
                      
                      
                       
                        // $("#assignedteam option[value="+response.data.team+"]").attr('selected', 'selected'); 
                       
                        // $('#assignedteam').val(response.data.expacteddate);
                                   
                    
                } 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax
    




     });

    

    //  $('#convertdealdata_1').click(function (e) {
    //         e.preventDefault();
    //        var route=$(this).attr("data-route");
    //        $.ajax({
    //         url:route,
    //         type: "post",
    //         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //     // mandatory
    //         data: {
    //             lid:lid,
                
                
    //         },
    //         success: function(response) {
    //             console.log(response);
    //             if (response.status=="success") {
    //                     $('#customer').val(response.data.customer);
    //                     $('#customername').val(response.data.customer);
    //                     $('#email').val(response.data.email);
    //                      $('#dealfixdate').val(response.data.dealfixdate);
    //                      $('#dealfixdatessss').val(response.data.dealfixdate);
    //                     $('#leadid').val(response.data.leadid);
    //                     // $('#leadidd').val(response.data.leadid);
    //                     $('#leadidd').val(response.data.leadid);
    //                     $('#Orginazation').val(response.data.ogrinazation);
    //                     $('#Orginazationname').val(response.data.ogrinazation);
    //                     $('#emails').val(response.data.email);
    //                     $('#emailid').val(response.data.email);
    //                     $('#phone').val(response.data.phone);
    //                     $('#phoneno').val(response.data.phone);
    //                     // $('#currency').val(response.data.value);
    //                     $('#currency').val(response.data.value);
    //                     $('#currencyvalue').val(response.data.value);
    //                     $('#contentss').val(response.data.content);
    //                     $('#myLargeModalLabel').text("Convert Lead to Deal  Project Name - "+response.data.title);
    //                     // $('#expecteddates').val(response.data.expacteddate);
    //                     $('#expecteddates').val(response.data.expacteddate);
    //                     $('#cityss').val(response.data.town);
                      
                      
                       
    //                     // $("#assignedteam option[value="+response.data.team+"]").attr('selected', 'selected'); 
                       
    //                     // $('#assignedteam').val(response.data.expacteddate);
                                   
                    
    //             } 
    //         },
    //         error: function(jqXHR, textStatus, errorThrown) {
    //             event.preventDefault();
    //         }
    //     }); //end ajax
        
       
    //     });



    $('#convertdealdata_1').click(function (e) { 


        // $('#addcallnotes').click(function (e) { 
            e.preventDefault();

        
       // alert($('#follouptype').val());
       var route = $(this).data('route');
                $.ajax({
                url:route, 
                    type: "post",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                // mandatory
                    data: {
                        leadvalue:$('#currency').val(),
                        expdate:$('#expecteddate').val(),
                        remarks:$('#contents').val(),
                        dealfixdata:$('#dealfixdata').val(),
                        // follouptype:$('#follouptype').val(),
                        // nextfollowup:$('#nextfollowup').val(),
                        // customername:$('#customername').val(),
                        // company:$('#orginazation').val(),
                        // phone:$('#phones').val(),
                        // email:$('#emailss').val(),
                        // project:$('#project').val(),
                        // followupnotes:$('#followupnotes').val(),
                        // teamid:$('#teamid').val(),
                        // teamname:$('#teamname').val(),
                      
                        
                        
                        
                    },
                    success: function(response) {
                       // console.log(response);
                        $('#e_currency').text("");
                        $('#e_expecteddate').text("");
                        $('#e_remarks').text("");
                       
                        if (response.status=="0") {
                            $.each(response.message, function (index, value) {
    
    
                                if(index=="leadvalue"){
                                    $('#e_currency').text(value);
                                }
                                if(index=="expdate"){
                                    $('#e_expecteddate').text(value);
                                }

                                if(index=="remarks"){
                                    $('#e_remarks').text(value);
                                }
                               
                                                
                               });
                                           
                            
                        } 
                        else if(response.status=="success"){
                            // alert(response.message);

                            Swal.fire({
                                position: 'center',
                                icon: "success",
                                // icon: data.icon,
                                title: response.message,
                                showConfirmButton: false,
                                timer: 1500
                            });


                            window.location.href = "http://localhost:8000/dashboard/viewdeals"
                            // location.reload(true);
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


          
    $('#editdeal').click(function (e) { 


        // $('#addcallnotes').click(function (e) { 
            e.preventDefault();

        //alert("fdsgjhsdg");
       // alert($('#follouptype').val());
       var route = $(this).data('route');
                $.ajax({
                url:route, 
                    type: "post",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                // mandatory
                    data: {
                        leadvalue:$('#currency').val(),
                        expdate:$('#expecteddate').val(),
                        remarks:$('#contents').val(),
                        dealfixdata:$('#dealfixdata').val(),
                        customername:$('#customer').val(),
                        company:$('#Orginazation').val(),
                        contactemail:$('#email').val(),
                        contactphone:$('#phone').val(),
                        // follouptype:$('#follouptype').val(),
                        // nextfollowup:$('#nextfollowup').val(),
                        // customername:$('#customername').val(),
                        // company:$('#orginazation').val(),
                        // phone:$('#phones').val(),
                        // email:$('#emailss').val(),
                        // project:$('#project').val(),
                        // followupnotes:$('#followupnotes').val(),
                        // teamid:$('#teamid').val(),
                        // teamname:$('#teamname').val(),
                      
                        
                        
                        
                    },
                    success: function(response) {
                       // console.log(response);
                        $('#e_currency').text("");
                        $('#e_expecteddate').text("");
                        $('#e_remarks').text("");
                        $('#e_customer').text("");
                        $('#e_orinazation').text("");
                        $('#e_email').text("");
                        $('#e_phone').text("");
                       
                        if (response.status=="0") {
                            $.each(response.message, function (index, value) {
    
    
                                if(index=="leadvalue"){
                                    $('#e_currency').text(value);
                                }
                                if(index=="expdate"){
                                    $('#e_expecteddate').text(value);
                                }

                                if(index=="remarks"){
                                    $('#e_remarks').text(value);
                                }

                                if(index=="customername"){
                                    $('#e_customer').text(value);
                                }
                                if(index=="company"){
                                    $('#e_orinazation').text(value);
                                }

                                if(index=="contactemail"){
                                    $('#e_email').text(value);
                                }

                                if(index=="contactphone"){
                                    $('#e_phone').text(value);
                                }
                               



                                                
                               });
                                           
                            
                        } 
                        else if(response.status=="success"){
                            // alert(response.message);
                            Swal.fire({
                                position: 'center',
                                icon: "success",
                               
                                title: response.message,
                                showConfirmButton: false,
                                timer: 1500
                            });
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

   


    //  for calling this moded from leads page

    $(document).on('click', '.leadid', function()
    {
        var lid=$(this).attr("data-lid");
       // alert(lid); 
        $.ajax({
            url:"getleaddata", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                lid:lid,
                
                
            },
            success: function(response) {
                console.log(response);
                if (response.status=="success") {
                        $('#customer').val(response.data.customer);
                        $('#customername').val(response.data.customer);
                        $('#email').val(response.data.email);
                         $('#dealfixdate').val(response.data.dealfixdate);
                         $('#dealfixdatessss').val(response.data.dealfixdate);
                        $('#leadid').val(response.data.leadid);
                        // $('#leadidd').val(response.data.leadid);
                        $('#leadidd').val(response.data.leadid);
                        $('#Orginazation').val(response.data.ogrinazation);
                        $('#Orginazationname').val(response.data.ogrinazation);
                        $('#emails').val(response.data.email);
                        $('#emailid').val(response.data.email);
                        $('#phone').val(response.data.phone);
                        $('#phoneno').val(response.data.phone);
                        // $('#currency').val(response.data.value);
                        $('#currency').val(response.data.value);
                        $('#currencyvalue').val(response.data.value);
                        $('#contentss').val(response.data.content);
                        $('#myLargeModalLabel').text("Convert Lead to Deal  Project Name - "+response.data.title);
                        // $('#expecteddates').val(response.data.expacteddate);
                        $('#expecteddates').val(response.data.expacteddate);
                        $('#cityss').val(response.data.town);
                      
                      
                       
                        // $("#assignedteam option[value="+response.data.team+"]").attr('selected', 'selected'); 
                       
                        // $('#assignedteam').val(response.data.expacteddate);
                                   
                    
                } 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax
    




     });


     $(document).on('click', '.leadid_inside', function()
     {
         var route=$(this).attr("data-route");
         var lid=$(this).attr("data-lid");

        // alert(route);
        //return false; 
         $.ajax({
             url:route,
             type: "get",
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         // mandatory
             data: {
                 lid:lid,
                 
                 
             },
             success: function(response) {
                 console.log(response);
                 if (response.status=="success") {
                         $('#currency,#totalamount').val(response.data[0].value);
                         $('#totalamounts').text(response.data[0].value);
                         $('#contents').val(response.data[0].description);
                         $('#customer').val(response.data[0].customer);
                         $('#Orginazation').val(response.data[0].ogrinazation);
                         $('#email').val(response.data[0].email);
                         $('#phone').val(response.data[0].phone);
                         $('#expecteddate').val(response.data[0].dealfixdate);


                      
                                    
                     
                 } 
             },
             error: function(jqXHR, textStatus, errorThrown) {
                 event.preventDefault();
             }
         }); //end ajax
     
 
 
 
 
      });


      $(document).on('click', '.getpayment', function()
      {
          var route=$(this).attr("data-route");
          var lid=$(this).attr("data-lid");
 
         // alert(route);
         //return false; 
          $.ajax({
              url:route,
              type: "get",
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          // mandatory
              data: {
                  lid:lid,
                  
                  
              },
              success: function(response) {
                  console.log(response);
                  if (response.status=="success") {
                          $('#currency,#totalamount').val(response.data[0].value);
                          $('#bal').val(response.lastamount);
                          $('#contents').val(response.data[0].description);
                          $('#customer').val(response.data[0].customer);
                          $('#Orginazation').val(response.data[0].ogrinazation);
                          $('#email').val(response.data[0].email);
                          $('#phone').val(response.data[0].phone);
                          $('#past_pay_total').val(response.sum);

                          if(response.flag==3 || response.flag==1 ){
                            
                            $('#pay').prop('disabled', true);
                            $('#Addpaymentdetails').prop('disabled', true);
                            $('#pay').val(response.bal);
                          }else{
                            $('#pay').prop('disabled', false);
                            $('#pay').val(response.bal);
                          } 
 
 
                       
                                     
                      
                  } 
              },
              error: function(jqXHR, textStatus, errorThrown) {
                  event.preventDefault();
              }
          }); //end ajax
      
  
  
  
  
       });

      
       $('#Addpaymentdetails').click(function(){
        var route=$(this).attr("data-route");
        // alert(route);
        $.ajax({
            url:route, 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                balpay:$('#pay').val(),
               
              
                
                
            },
            success: function(response) {
                console.log(response);
                $('#u_pay').text("");
                if (response.status=="0") {

                    $.each(response.message, function (index, value) {


                        if(index=="balpay"){
                            $('#u_pay').text(value);
                        }
                       
                                        
                       });
                    
                } else if(response.status=="success"){
                   

                    Swal.fire({
                        position: 'center',
                        icon: "success",
                        // icon: data.icon,
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500
                    });

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

     


     $(document).on('click', '.convertdealview', function()
     {
         var lid=$(this).attr("data-id");
       // alert(lid); 
     
         $.ajax({
             url:"getleaddatafordeal", 
             type: "post",
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         // mandatory
             data: {
                 lid:lid,
                 
                 
             },
             success: function(response) {
                 console.log(response);
                 if (response.status=="success") {
                         $('#customer').val(response.data.customer);
                         $('#customername').val(response.data.customer);
                          $('#dealfixdate').val(response.data.dealfixdate);
                          $('#dealfixdatessss').val(response.data.dealfixdate);
                         $('#leadid').val(response.data.leadid);
                         // $('#leadidd').val(response.data.leadid);
                         $('#leadidd').val(response.data.leadid);
                         $('#Orginazation').val(response.data.ogrinazation);
                         $('#Orginazationname').val(response.data.ogrinazation);
                         $('#emails').val(response.data.email);
                         $('#emailid').val(response.data.email);
                         $('#phone').val(response.data.phone);
                         $('#phoneno').val(response.data.phone);
                         // $('#currency').val(response.data.value);
                         $('#currency').val(response.data.value);
                         $('#currencyvalue').val(response.data.value);
                         $('#contentss').val(response.data.content);
                         $('#myLargeModalLabel').text("Convert Lead to Deal  Project Name - "+response.data.title);
                         // $('#expecteddates').val(response.data.expacteddate);
                         $('#expecteddates').val(response.data.expacteddate);
                         $('#cityss').val(response.data.town);
                       
                       
                        
                         // $("#assignedteam option[value="+response.data.team+"]").attr('selected', 'selected'); 
                        
                         // $('#assignedteam').val(response.data.expacteddate);
                                    
                     
                 } 
             },
             error: function(jqXHR, textStatus, errorThrown) {
                 event.preventDefault();
             }
         }); //end ajax
     
 
 
 
 
      });

     $('#convertdeals').click(function (e){


        $.ajax({
            url:"convertleadtodeal", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        // mandatory
            data: {
                lid:$('#leadid').val(),
                amount:$('#currency').val(),
                expecteddate:$('#expecteddate').val(),
                requirements:$('#contents').val(),
                team:$('#assignedteam').val(),
                dealfixdata:$('#dealfixdata').val(),
             
                
                
            },
            success: function(response) {
                // console.log(response.data.leadid);
                $('#e_currency').text("");
                $('#e_expecteddate').text("");
                $('#e_contents').text("");
                $('#e_requirements').text("");
                if (response.status=="0") {

                    $.each(response.message, function (index, value) {


                        if(index=="amount"){
                            $('#e_currency').text(value);
                        }
                        if(index=="expecteddate"){
                            $('#e_expecteddate').text(value);
                        }
                        if(index=="requirements"){
                            $('#e_contents').text(value);
                        }
                        if(index=="requirements"){
                            $('#e_requirements').text(value);
                        }
                                        
                       });
                    
                } else if(response.status=="success"){
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

    //  close



 // from deals strip
     $(document).on('click', '.dealid-won', function()
     {
       
         var lid=$(this).attr("data-lid");
        // alert(lid); 
         $.ajax({
             url:"dashboard/closelead", 
             type: "post",
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         // mandatory
             data: {
                 lid:lid,
                 
                 
             },
             success: function(response) {
                 console.log(response);
                 if (response.status=="success") {
                       alert(response.message);
                       location.reload(true);           
                     
                 } else if(response.status=="failuer"){
                    alert(response.message);
                    location.reload(true);
                 }
             },
             error: function(jqXHR, textStatus, errorThrown) {
                 event.preventDefault();
             }
         }); //end ajax
     
 
 
 
 
      });

      // from deals page
      $(document).on('click', '.dealid-won-deals', function()
      {
        
          var lid=$(this).attr("data-lid");
       
          $.ajax({
              url:"closelead", 
              type: "post",
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          // mandatory
              data: {
                  lid:lid,
                  
                  
              },
              success: function(response) {
               
                  if (response.status=="success") {
                    $.toast({
                        heading: 'Success',
                        text: response.message,
                        position: 'mid-center',
                        stack: false,
                        icon: 'success',
                        hideAfter: 1000 ,
                        afterHidden: function () {
                            location.reload(true);          
                        },


                    })


                       // alert(response.message);
                      
                      
                  } else if(response.status=="failuer"){
                     alert(response.message);
                     location.reload(true);
                  }
              },
              error: function(jqXHR, textStatus, errorThrown) {
                  event.preventDefault();
              }
          }); //end ajax
      
  
  
  
  
       });
// for 
      $(document).on('click', '.dealid-lost', function()
      {
        
          var lid=$(this).attr("data-lid");
          //alert(lid); 
          $.ajax({
              url:"dashboard/deallost", 
              type: "post",
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          // mandatory
              data: {
                  lid:lid,
                  
                  
              },
              success: function(response) {
                  console.log(response);
                  if (response.status=="success") {
                        alert(response.message);
                        location.reload(true);           
                      
                  } else if(response.status=="failuer"){
                     alert(response.message);
                     location.reload(true);
                  }
              },
              error: function(jqXHR, textStatus, errorThrown) {
                  event.preventDefault();
              }
          }); //end ajax
      
  
  
  
  
       });

       // from deals page
       $(document).on('click', '.dealid-lost-deal', function()
       {
         
           var lid=$(this).attr("data-lid");
           //alert(lid); 
           $.ajax({
               url:"deallost", 
               type: "post",
               headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
           // mandatory
               data: {
                   lid:lid,
                   
                   
               },
               success: function(response) {
                   console.log(response);
                   if (response.status=="success") {
                     
                         
                         $.toast({
                            heading: 'Success',
                            text: response.message,
                            position: 'mid-center',
                            stack: false,
                            icon: 'success',
                            hideAfter: 1000 ,
                            afterHidden: function () {
                                location.reload(true);  
                            },
    
    
                        })
    
                       
                   } else if(response.status=="failuer"){
                      alert(response.message);
                      location.reload(true);
                   }
               },
               error: function(jqXHR, textStatus, errorThrown) {
                   event.preventDefault();
               }
           }); //end ajax
       
   
   
   
   
        });


       // for reopen
       $(document).on('click', '.dealid-repoen', function()
       {
         
           var lid=$(this).attr("data-lid");
          // alert(lid); 
           $.ajax({
               url:"dashboard/dealreopen", 
               type: "post",
               headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
           // mandatory
               data: {
                   lid:lid,
                   
                   
               },
               success: function(response) {
                   console.log(response);
                   if (response.status=="success") {
                         alert(response.message);
                         location.reload(true);           
                       
                   } else if(response.status=="failuer"){
                      alert(response.message);
                      location.reload(true);
                   }
               },
               error: function(jqXHR, textStatus, errorThrown) {
                   event.preventDefault();
               }
           }); //end ajax
       
   
   
   
   
        });

            // from 
        $(document).on('click', '.dealid-repoen-deals', function()
        {
          
            var lid=$(this).attr("data-lid");
           // alert(lid); 
            $.ajax({
                url:"dealreopen", 
                type: "post",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            // mandatory
                data: {
                    lid:lid,
                    
                    
                },
                success: function(response) {
                    console.log(response);
                    if (response.status=="success") {
                        $.toast({
                            heading: 'Success',
                            text: response.message,
                            position: 'mid-center',
                            stack: false,
                            icon: 'success',
                            hideAfter: 1000 ,
                            afterHidden: function () {
                                location.reload(true);         
                            },
    
    
                        })
    

                         // alert(response.message);
                            
                        
                    } else if(response.status=="failuer"){
                       alert(response.message);
                       location.reload(true);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    event.preventDefault();
                }
            }); //end ajax
        
    
    
    
    
         });
 

//     $('#createdeal').click(function (e) { 
//         e.preventDefault();
           
//         $.ajax({
//             url:"adddeal", 
//             type: "post",
//             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      
//             data: {
//                 customer:$('#customer').val(),
//                 Orginazation:$('#Orginazation').val(),
//                 Title:$('#Title').val(),
//                 Description:$('#Description').val(),
//                 amount:$('#amount').val(),
//                 Priotity:$('#Priotity').val(),
//                 currency:$('#currency').val(),
//                 owner:$('#owner').val(),
//                 mobile:$('#mobile').val(),
//                 email:$('#email').val(),
//                 address1:$('#address1').val(),
//                 address2:$('#address2').val(),
//                 address3:$('#address3').val(),
//                 city:$('#city').val(),
//                 state:$('#state').val(),
//                 zipcode:$('#zipcode').val(),
//                 country:$('#country').val(),
                
                
                
//             },
//             success: function(response) {
//                 $('#e_customer').text("");
//                 $('#e_Orginazation').text("");
//                 $('#e_Title').text("");
//                 $('#e_Description').text("");
//                 $('#e_mobile').text("");
//                 $('#e_email').text("");
//                 if (response.status=="0") {
//                     $.each(response.message, function (index, value) {


//                         if(index=="customer"){
//                             $('#e_customer').text(value);
//                         }
//                         if(index=="Orginazation"){
//                             $('#e_Orginazation').text(value);
//                         }
//                         if(index=="Title"){
//                             $('#e_Title').text(value);
//                         }
//                         if(index=="mobile"){
//                             $('#e_mobile').text(value);
//                         }

//                         if(index=="email"){
//                             $('#e_email').text(value);
//                         }

//                         if(index=="Description"){
//                             $('#e_Description').text(value);
//                         }
                                        
//                        });

                    
//                 }else if(response.status=="success"){
//                     alert(response.message)
//                 }else if(response.status=="failuer"){
//                     alert(response.message)
//                 }
//             },
//             error: function(jqXHR, textStatus, errorThrown) {
//                 event.preventDefault();
//             }
//         }); //end ajax

        
//       });






});