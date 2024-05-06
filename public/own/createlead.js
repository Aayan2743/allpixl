$(document).ready(function(){

    
    // $('input[type=datetime-local]').val(new Date().toJSON().slice(0,19));
function getdata(){
    $.ajax({
        url: 'dashboard/getleadsdata',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // Iterate over the fetched data and populate the table
            $('#leadstable tbody').empty();
            $.each(data, function(index, employee) {
                $('#leadstable tbody').append(


                    '<tr> <td><div class="symbol symbol-40px">'+
                   
                        
                    employee.leadid
                        
                           +'</div> </td> </tr>'

                               
                           

                          

                          

                          
                            
                      
                    // '<tr>' +
                    // '<td>' + employee.leadid + '</td>' +
                    // '<td>' + employee.ogrinazation + '</td>' +
                    // '<td>' + employee.title + '</td>' +
                    // '<td>' + employee.value + '</td>' +
                    // '</tr>'



                //         <div class="symbol symbol-40px">

                //             @if($l%2==0)
                //             <span
                //                 class="symbol-label bg-light-success">

                              
                //                 <i class="ki-duotone ki-flask fs-2x text-success"
                //                 style="font-family: 'arial' !important; text-transform:capitalize">{{$leads->firstletter}} </span></i>
                               
                               
                //             </span>
                //             @elseif($l%2==1)
                //             <span
                //             class="symbol-label bg-light-info">

                          
                //             <i class="ki-duotone ki-abstract-24 fs-2x text-info"
                //             style="font-family: 'arial' !important; text-transform:capitalize">{{$leads->firstletter}} </span></i>
                           
                           
                //         </span>

                //             @endif
                //         </div>
                //     </td>
                //     <td>
                        
                //         <a href="{{route('admin.viewleads',$leads->leadid)}}"
                //             class="text-gray-900 fw-bold  d-block fs-6" style="text-transform: capitalize;"><span>{{$leads->customer}}</span><br>
                //         </a>
                //         <span style="font-weight: 400; text-transform: capitalize;" >{{$leads->ogrinazation}}</span><br>
                //         <span
                //             class="badge py-3 px-4 fs-7 badge-light-warning" style="text-transform: capitalize">{{$leads->title}}</span>
                //         <!-- <img src="assets/media/Warm.png"  style="height: 25px;position: absolute;left: 6px;"> -->

                //     </td>
                //     <td class="text-end">
                //         <div
                //             class="d-flex flex-column w-100 me-2">
                //             <div class="d-flex flex-stack mb-2">
                //                 <p
                //                     class="text-gray-900 fw-bold  fs-6">
                //                     {{$leads->phone}}</p>
                //             </div>
                //         </div>
                //     </td>
                //     <td class="text-end">
                //         <div
                //             class="d-flex flex-column w-100 me-2">
                //             <div class="d-flex flex-stack mb-2">
                //                 <p
                //                     class="text-gray-900 fw-bold  fs-6">
                //                     {{$leads->value==""? "N/A" : $leads->value}}</p>
                //             </div>
                //         </div>
                //     </td>
                //     <td>
                //         <div class="d-flex  flex-shrink-0">
                //             <div class="d-flex flex-stack mb-2">
                //                 <p
                //                     class="text-gray-900 fw-bold  fs-6" style="text-transform: capitalize"> 
                //                     {{$leads->leadsource}}</p>
                //             </div>
                //         </div>
                //     </td>
                //     <td>
                //         <div class="d-flex  flex-shrink-0">
                //             <div class="d-flex flex-stack mb-2">
                //                 <p
                //                     class="text-gray-900 fw-bold  d-block fs-6" style="text-transform: capitalize">
                //                     <span>{{$leads->owner}}</span><br>
                //                     <span
                //                         class="badge rounded-pill text-bg-primary text-white">
                //                         {{ \Carbon\Carbon::parse($leads->created_at)->diffForhumans() }}
                //                         </span><br>
                //                 </p>
                //             </div>
                //         </div>
                //     </td>
                //     <td>
                //         <div class="d-flex  flex-shrink-0">
                //             <p
                //                 class="text-gray-900 fw-bold  fs-6">
                                
                //                 @if($l%2==0)
                //                 <span
                //                 class="badge py-3 px-4 fs-7 badge-light-success">{{$leads->leadstagetext}} </span>
                //                 @elseif($l%2==1)
                //                 <span
                //                 class="badge py-3 px-4 fs-7 badge-light-primary">{{$leads->leadstagetext}} </span>
                //                 @endif
                               
                //             </p>
                //         </div>
                //     </td>
                //     <td>
                //         <div class="d-flex  flex-shrink-0">
                //             <p
                //                 class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                
                //                 <a class="leadid" data-lid="{{$leads->leadid}}"
                //                     data-bs-toggle="modal"
                //                     data-bs-target="#addleads">
                                
                //                 <i
                //                     class="ki-duotone ki-switch fs-2">
                //                     <span class="path1"></span>
                //                     <span class="path2"></span>
                //                 </i>
                //                 </a>
                //             </p>
                //             <p
                //                 class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            
                //                 <a class="eleadid" data-lid="{{$leads->leadid}}"
                //                     data-bs-toggle="modal"
                //                     data-bs-target="#editleads">
                //                 <i
                //                     class="ki-duotone ki-pencil fs-2">
                //                     <span class="path1"></span>
                //                     <span class="path2"></span>
                //                 </i>
                //                 </a>
                //             </p>
                //             <p
                //                 class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                            
                //                 <a class="deleteleadbyid" data-lid="{{$leads->leadid}}"
                //                     data-bs-toggle="modal"
                //                     data-bs-target="#deleteleads">
                //                 <i
                //                     class="ki-duotone ki-trash fs-2">
                //                     <span class="path1"></span>
                //                     <span class="path2"></span>
                //                     <span class="path3"></span>
                //                     <span class="path4"></span>
                //                     <span class="path5"></span>
                //                 </i>
                //             </a>
                //             </p>
                //         </div>
                //     </td>
                // </tr>










                );
            });
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });

}

$('#displayleads').click(function (e) {
    alert("dfgjdfkg");
    getdata();

  })


    



    $("#dealsearch").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

    $('#createleads').click(function (e) { 
        e.preventDefault();
    //  alert("Asif tsting");
    //  alert($('#customers1').val());
        //return false;
        $.ajax({
            url:"dashboard/createlead", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      
            data: {
                lead_date:$('#leadcrerated').val(),
                customer:$('#customers1').val(),
                Orginazation:$('#Orginazations1').val(),
                // Title1:$('#Title').val(),
                Title:$('#Titless').val(),
                Title2:$("#Titless :selected").text(),
                Description:$('#Description1').val(),
                amount:$('#leadprise').val(),
                Priotity:$('#Priotitys').val(),
                currency:$('#currency').val(),
                owner:$('#owner :selected').text(),
                ownerid:$('#owner').val(),
                mobile:$('#mobile1').val(),
                email:$('#emails1').val(),
                address1:$('#address1').val(),
                address2:$('#address2').val(),
                address3:$('#address3').val(),
                city:$('#citys1').val(),
                state:$('#state').val(),
                zipcode:$('#zipcode').val(),
                country:$('#country').val(),
                leadsource:$('#leadsource1').val(),
                
                
                
            },
            success: function(response) {
                $('#e_customer').text("");
                $('#e_Orginazation').text("");
                $('#e_Title').text("");
                $('#e_Description').text("");
                $('#e_mobile').text("");
                $('#e_email').text("");
                $('#e_leadsourcesss').text("");
                $('#e_city').text("");
                $('#e_Priotity').text("");
                if (response.status=="0") {
                    $.each(response.message, function (index, value) {


                        if(index=="customer"){
                            $('#e_customer').text(value);
                        }
                        if(index=="Orginazation"){
                            $('#e_Orginazation').text(value);
                        }
                        if(index=="Title"){
                            $('#e_Title').text(value);
                        }
                        if(index=="mobile"){
                            $('#e_mobile').text(value);
                        }

                        if(index=="email"){
                            $('#e_email').text(value);
                        }

                        if(index=="Description"){
                            $('#e_Description').text(value);
                        }
                        if(index=="leadsource"){
                            $('#e_leadsourcesss').text(value);
                        }

                        if(index=="city"){
                            $('#e_city').text(value);
                        }

                        if(index=="Priotity"){
                            $('#e_Priotity').text(value);
                        }

                        


                        
                                        
                       });

                    
                }else if(response.status=="success"){
                    // alert(response.message)
                    
                    // $.toast({
                    //     heading: 'Success',
                    //     text: response.message,
                    //     position: 'mid-center',
                    //     stack: false,
                    //     icon: 'success',
                    //     hideAfter: 1000 ,
                    //     afterHidden: function () {
                    //         // var hostname = window.location.hostname;
                    //         // https://sales.pixl.in/dashboard
                            
                    //              window.location.href = "https://sales.pixl.in/dashboard/leads"
                    //         // window.location.href = "http://localhost:8000/"
                    //         // window.location.href = hostname;
                    //     },

                    // })

                    Swal.fire({
                        position: 'center',
                         icon: "success",
                        // icon: data.icon,
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    // window.location.href = "https://sales.pixl.in/dashboard/leads"


                    // window.location.href = "https://leads.pixl.in/dashboard/leads"
                    window.location.href = window.envVariables.apiUrl+"/dashboard/leads"

                    


                  
                  
                }else if(response.status=="failuer"){
                    alert(response.message)
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax

        
      });

// colde calling from followup page other pages

      $('#createleads1').click(function (e) { 
        e.preventDefault();
              //return false;
        $.ajax({
            url:"createlead", 
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      
            data: {
                lead_date:$('#leadcrerated').val(),
                customer:$('#customers').val(),
                Orginazation:$('#Orginazations').val(),
                // Title:$('#Title').val(),
                Title:$('#Titless').val(),
                Title2:$("#Titless :selected").text(),
                // Title:$("#Title :selected").text(),
                Description:$('#Description').val(),
                amount:$('#leadprise').val(),
                Priotity:$('#Priotitys').val(),
                currency:$('#currency').val(),
                owner:$('#owner :selected').text(),
                ownerid:$('#owner').val(),
            
                mobile:$('#mobile').val(),
                email:$('#emails').val(),
                address1:$('#address1').val(),
                address2:$('#address2').val(),
                address3:$('#address3').val(),
                city:$('#citys').val(),
                state:$('#state').val(),
                zipcode:$('#zipcode').val(),
                country:$('#country').val(),
                leadsource:$('#leadsource').val(),
                
                
                
            },
            success: function(response) {
                $('#e_customer').text("");
                $('#e_Orginazation').text("");
                $('#e_Title').text("");
                $('#e_Description').text("");
                $('#e_mobile').text("");
                $('#e_email').text("");
                $('#e_leadsourcesss').text("");
                $('#e_city,#e_city').text("");
                $('#e_cityssss').text("");
                $('#e_Description22sssss2').text("");
                $('#e_Description').text("");
                $('#e_Priotity').text("");
               
                if (response.status=="0") {
                    $.each(response.message, function (index, value) {


                        if(index=="customer"){
                            $('#e_customer').text(value);
                         
                        }
                        if(index=="Orginazation"){
                            $('#e_Orginazation').text(value);
                        }
                        if(index=="Title"){
                            $('#e_Title').text(value);
                        }
                        if(index=="mobile"){
                            $('#e_mobile').text(value);
                        }

                        if(index=="email"){
                            $('#e_email').text(value);
                        }

                       
                        if(index=="leadsource"){
                            $('#e_leadsourcesss').text(value);
                        }

                        if(index=="Priotity"){
                            $('#e_Priotity').text(value);
                        }

                        // if(index=="city"){
                        //     $('#e_city).text(value);
                        // }
                          if(index=="city"){
                            $('#e_city,#e_cityssss').text(value);
                        }
                        
                         if(index=="Description"){
                            $('#e_Description22sssss2,#e_Description').text(value);
                        }
                        
                        


                        
                                        
                       });

                    
                }else if(response.status=="success"){
                    // alert(response.message)



                    Swal.fire({
                        position: 'center',
                         icon: "success",
                        // icon: data.icon,
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    // window.location.href = "https://sales.pixl.in/dashboard/leads"
                    window.location.href = window.envVariables.apiUrl+"/dashboard/leads"
                    // window.location.href = "https://leads.pixl.in/dashboard/leads"

                    // $.toast({
                    //     heading: 'Success',
                    //     text: response.message,
                    //     position: 'mid-center',
                    //     stack: false,
                    //     icon: 'success',
                    //     hideAfter: 1000 ,
                    //     afterHidden: function () {

                    //         // var hostname = window.location.hostname;
                            
                    //         // window.location.href = "http://localhost:8000/"
                    //         // window.location.href = hostname

                    //         // window.location.href = "http://localhost:8000/"
                    //          window.location.href = "https://sales.pixl.in/dashboard/leads"
                    //     },

                    // })
                    // window.location.href = "http://localhost:8000/dashboard"
                    // window.location.href = "http://localhost:8000/dashboard"
                  
                }else if(response.status=="failuer"){
                    alert(response.message)
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                event.preventDefault();
            }
        }); //end ajax

        
      });


});