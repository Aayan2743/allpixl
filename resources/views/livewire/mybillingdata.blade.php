<div>
 
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

<div class="card">
    <div class="card-body">
        <h3 class="me-2">Plans</h3>
        <div class="d-flex justify-content-between">
            @foreach ($get_plan_arr as $item)
            <div class="card p-4 h-100 W-100">
               
                <h2>{{$item->name}}</h2>
                <h3 class="price">{{$item->amount}}</h3>
                <small>{{$item->days}} Days</small>
                <p>Up to 3 Websites</p>
                <p>Basic technical support</p>
                <p class="mb-3 mt-1">Basic access to analytics</p>

                <button class="btn btn-primary" wire:click="initiatePayment({{$item->planid}})" wire:loading.attr="disabled">
                     <span >Pay {{$item->amount}} INR</span>
                   
                    {{-- <span wire:loading.remove>Pay {{$item->amount}} INR</span>
                    <span wire:loading>Processing...</span> --}}
                </button>
             


            </div>
                
            @endforeach
           
            {{-- <div class="card p-4 h-100 W-100">
                <h2>name</h2>
                <h3 class="price">5600</h3>
                <small>20 dAY</small>
                <p>Up to 3 Websites</p>
                <p>Basic technical support</p>
                <p class="mb-3 mt-1">Basic access to analytics</p>
                <button class="btn btn-primary" wire:click="">Subscribe</button>
            </div>
            <div class="card p-4 h-100 W-100">
                <h2>name</h2>
                <h3 class="price">5600</h3>
                <small>20 dAY</small>
                <p>Up to 3 Websites</p>
                <p>Basic technical support</p>
                <p class="mb-3 mt-1">Basic access to analytics</p>
                <button class="btn btn-primary" wire:click="">Subscribe</button>
            </div>
            <div class="card p-4 h-100 W-100">
                <h2>name</h2>
                <h3 class="price">5600</h3>
                <small>20 dAY</small>
                <p>Up to 3 Websites</p>
                <p>Basic technical support</p>
                <p class="mb-3 mt-1">Basic access to analytics</p>
                <button class="btn btn-primary" wire:click="">Subscribe</button>
            </div> --}}
    
        </div>

    </div>
</div>

  

    <div class="table-responsive">
        
        <div class="card mb-5 mb-xl-10 mt-4">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Billing Details</span>
                </h3>
                <div>
                    <a href="#" 
                        class="btn btn-sm btn-light btn-active-primary btn-secondary btn-outline" data-bs-toggle="modal"
                        data-bs-target="#modal_add_templates">
                        <i class="ki-duotone ki-plus fs-2"></i>Create Template</a>


                        <a href="#" 
                        class="btn btn-sm btn-light btn-active-primary btn-secondary btn-outline" data-bs-toggle="modal"
                        data-bs-target="#modal_add_templatess">
                        <i class="ki-duotone ki-plus fs-2"></i>500 Rs</a>


                        <button wire:click="initiatePayment" wire:loading.attr="disabled">
                            <span wire:loading.remove>Pay 500 INR</span>
                            <span wire:loading>Processing...</span>
                        </button>



                </div>
            </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <thead>
                            <tr class="fw-bold text-muted">
                                <th class="w-25px">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    </div>
                                </th>
                                <th class="min-w-100px">
                                    #Company id</th>
                                <th class=" text-left">
                                    Plan Details</th>
                                <th class="min-w-100px text-left">
                                    Starting Date</th>
                                <th class=" text-left">
                                    Expaired Date</th>
                                <th class=" text-left">
                                    Amount</th>
                                <th class="min-w-100px text-center">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($getmy_plan_details as $item)


                            <tr >
                                <td class="align-content-center">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    </div>
                                </td>
                                <td class="align-content-center">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                       {{$item->companyid}}
                                    </div>
                                </td>
                                <td class="align-content-center">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        {{-- {{$item->plan}} --}}

                                        @php
                                         $arr=checkservice_user_plan_details($item->plan);

                                        @endphp

                                        {{$arr['name']}}
                                    </div>
                                </td>
                                <td class="align-content-center">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                       

                                        {{ \Carbon\Carbon::parse($item->regdate)->format('d-M-Y g:i A') }}
                                      
                                    </div>
                                </td>
                                <td class="align-content-center">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                      
                                        {{ \Carbon\Carbon::parse($item->expdate)->format('d-M-Y g:i A') }}
                                    </div>
                                </td>
                                <td class="align-content-center">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        {{$item->amount}}
                                    </div>
                                </td>
                                <td class="">
                                    <div class="mx-5">
                                        <button wire:click=""
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm  mx-3">
                                            <img src={{asset('icons\Edit.png')}} alt="dsfdsffsd" />
                                        </button>
                                        <button wire:click=""
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm ">
                                            <img src={{asset('icons\delete.png')}} alt="dsfdsffsd" />
                                        </button>
                                    </div>
                                </td>
                            </tr>
                                
                            @endforeach
                            

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- model start here --}}
    <div wire:ignore.sel class="modal fade P-10" id="modal_add_templates" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-950px card P-5">
           
                <h1 class="title py-5 text-center">Subscription Plans</h1>
                <div class="container d-flex justify-content-between mb-5">

                @foreach ($get_plan as $item)
                <div class="card p-4 h-100 W-100">
                    <h2>{{$item->name}}</h2>
                    <h3 class="price">{{$item->amount}}</h3>
                    <small>{{$item->days}}</small>
                    <p>Up to 3 Websites</p>
                    <p>Basic technical support</p>
                    <p class="mb-3 mt-1">Basic access to analytics</p>
                    <button class="btn btn-primary" wire:click="selectplan({{$item->days}})">Subscribe</button>
                </div>
                    
                @endforeach

                 
                    {{-- <div class="card p-4 h-100 W-100">
                        <h2>Standard</h2>
                        <h3 class="price">$50</h3>
                        <small>Annually</small>
                        <p>Up to 3 Websites</p>
                        <p>Basic technical support</p>
                        <p class="mb-3 mt-1">Basic access to analytics</p>
                        <button class="btn btn-primary">Subscribe</button>
                    </div>
                    <div class="card p-4 h-100 W-100">
                        <h2>Standard</h2>
                        <h3 class="price">$50</h3>
                        <small>Annually</small>
                        <p>Up to 3 Websites</p>
                        <p>Basic technical support</p>
                        <p class="mb-3 mt-1">Basic access to analytics</p>
                        <button class="btn btn-primary">Subscribe</button>
                    </div>
                    <div class="card p-4 h-100 W-100">
                        <h2>Standard</h2>
                        <h3 class="price">$50</h3>
                        <small>Annually</small>
                        <p>Up to 3 Websites</p>
                        <p>Basic technical support</p>
                        <p class="mb-3 mt-1">Basic access to analytics</p>
                        <button class="btn btn-primary">Subscribe</button>
                    </div> --}}
                </div>
             
           

        </div>
    </div>


    <div wire:ignore.self class="modal fade P-10" id="modal_add_templatess" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-950px card P-5">
        
                <div class="modal-content">
           
                <h1 class="title py-5 text-center">Subscription Plans</h1>
                <div class="container d-flex justify-content-between mb-5">

                @foreach ($get_plan as $item)
                <div class="card p-4 h-100 W-100">
                    <h2>{{$item->name}}</h2>
                    <h3 class="price">{{$item->amount}}</h3>
                    <small>{{$item->days}}</small>
                    <p>Up to 3 Websites</p>
                    <p>Basic technical support</p>
                    <p class="mb-3 mt-1">Basic access to analytics</p>
                    <button class="btn btn-primary" wire:click="selectplan({{$item->days}})">Subscribe</button>
                </div>
                    
                @endforeach

                 
                 
               
                </div>
                </div>
                
             
           

        </div>
    </div>

    <div wire:ignore.self class="modal fade P-10" id="modal_add_templatesssss" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-950px card P-5">
        
                <div class="modal-content">
           
                <h1 class="title py-5 text-center">Subscription Plans</h1>
                <div class="container d-flex justify-content-between mb-5">

                @foreach ($get_plan as $item)
                <div class="card p-4 h-100 W-100">
                    <h2>{{$item->name}}</h2>
                    <h3 class="price">{{$item->amount}}</h3>
                    <small>{{$item->days}}</small>
                    <p>Up to 3 Websites</p>
                    <p>Basic technical support</p>
                    <p class="mb-3 mt-1">Basic access to analytics</p>
                    <button class="btn btn-primary" wire:click="selectplan({{$item->days}})">Subscribe</button>
                </div>
                    
                @endforeach

                 
                 
               
                </div>
                </div>
                
             
           

        </div>
    </div>


    
</div>
