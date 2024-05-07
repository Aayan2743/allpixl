<div>
    {{-- In work, do what you enjoy. --}}


    <div class="table-responsive">
        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
            <thead>
                <tr class="fw-bold text-muted">
                    <th class="w-25px">
                        <div
                            class="form-check form-check-sm form-check-custom form-check-solid">
                        </div>
                    </th>
                    <th class="">
                        Template Name</th>
                    <th class="text-left">
                        Message</th>
                        <th class="text-center">
                            Action
                        </th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($getwhatapptemplates as $template)
                        
                  
                <tr>
                    <td class="align-content-center"> 
                        <div
                            class="form-check form-check-sm form-check-custom form-check-solid">
                        </div>
                    </td>
                    <td class="align-content-center"> 
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-start flex-column">
                                <p
                                    class="text-gray-900 fw-norma  fs-6">
                                    {{$template->template_name}}</p>
                            </div>
                        </div>
                    </td>
                    <td class="align-content-center"> 
                        {!!$template->template_message!!}
                    </td>
                    <td class="align-content-center"> 
                        <div class="d-flex flex-column w-100 me-2">
                            <div class="d-flex flex-stack mb-2">

                                {{-- @php
                                    $textWithLineBreaks = str_replace('<br />', "\n", $template->template_message);
                                  
                                  
                                        $leadId = Request::route('id');
                                    
                                        $leadId =Crypt::decryptString($leadId);
     
                                @endphp --}}


                                 {{-- <a href="{{route('admin.sendmessage',[$template->templateid,$leadId])}}" class="btn btn-primary"  >Send </a> --}}
                                    <button wire:click="ss({{$template->templateid}})" class="btn btn-primary" wire:loading.class.remove="bg-blue" class="bg-blue" > 
                                        send
                                        
                                    </button>


                                    {{-- <div wire:loading wire:target="ss">
                                        Processing Payment...
                                    </div> --}}


                                </div>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>
