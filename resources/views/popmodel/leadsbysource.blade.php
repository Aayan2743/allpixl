<div class="card">
<div class="card-header position-relative py-0" style="width:-webkit-fill-available;">
                <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
                    <li class="nav-item p-0 ms-0 me-8" role="presentation">
                        <h3 class="card-title align-items-start flex-column" style="display: block;"> 
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-category fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <span class="card-label fw-bold text-gray-900 m-0">Lead's by Sources</span>
                        </h3>
                    </li>
                </ul>
            </div>
    <div class="col-md-12">
        <div class="card-header border-0 pt-2">
            <div class="row" style="width:-webkit-fill-available;">
                <div class="col-12">
                    <div class="table-responsive" style="width: -webkit-fill-available;">
                        <div class="pe-6 " style="height: 415px">
                            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                <thead>
                                    <tr class="fw-bold text-muted">
                                        <th></th>
                                        <th>Name</th>
                                        <th>Leads</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leadSourcesCount as $sourcedata)
                                    <tr>
                                        <td class="align-content-center">
                                            <div class="symbol symbol-40px p-1">
                                                <img
                                                    src="https://preview.keenthemes.com/metronic8/demo3/assets/media/svg/brand-logos/dribbble-icon-1.svg">
                                            </div>
                                        </td>
                                        <td class="align-content-center">
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                    <p>{{$sourcedata->leadsource}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-content-center">
                                            <span class="badge badge-light fw-bold my-2 me-5"
                                                style="font-size: large;">{{$sourcedata->leadsource_count}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>