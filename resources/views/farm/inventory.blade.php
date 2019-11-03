@extends('layouts.app')

@section('css')
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/core/menu/menu-types/vertical-menu-modern.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/core/colors/palette-gradient.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css') }}">
<!-- END Page Level CSS-->
@endsection


@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Breadcrumbs bottom</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Page headers</a>
                                </li>
                                <li class="breadcrumb-item active">Breadcrumbs bottom
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">My Task List</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#iconModal">
                                        <i class="ft-plus white"></i> New Task
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="iconModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
                                                       aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel2"><i class="ft-user"></i> Farm Information</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form id="lotform" method="POST" action="{{ route('create_lots') }}" enctype="multipart/form-data">

                                                    <div class="modal-body">

                                                        @csrf
                                                        <div class="form-body">

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="farm">Farm</label>
                                                                        <select id="farm" name="farm" class="form-control">
                                                                            <option value="" selected="" disabled="">Select Farm</option>
                                                                            @foreach($farms as $id => $farm )
                                                                                <option value="{{ $id }}" >{{ $farm }}</option>
                                                                            @endforeach
                                                                        </select>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="crop">Crop Name</label>
                                                                        <input type="text" id="crop" class="form-control" placeholder="Crop Name" name="crop">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="specie">Crop Specie</label>
                                                                        <input type="text" id="specie" class="form-control" placeholder="Crop Specie" name="specie">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="fmethod">Farming Method</label>
                                                                        <select id="fmethod" name="fmethod" class="form-control">
                                                                            <option value="" selected="" disabled="">Select Farming Method</option>
                                                                            <option value="Organic Farming" >Organic Farming</option>
                                                                            <option value="Non-Organic Farmin" >Non-Organic Farming</option>
                                                                        </select>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="companyName">No Of Lots</label>
                                                                        <fieldset>
                                                                            <div class="input-group">
                                                                                <input type="text" class="touchspin" name="lots" value=""  data-bts-button-down-class="btn btn-green"
                                                                                       data-bts-button-up-class="btn btn-green"/>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn grey btn-outline-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-outline-green">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->

                                    <div class="modal fade text-left" id="catModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
                                         aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel2"><i class="ft-user"></i> Farm Information</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form id="catform" method="POST" action="{{ route('create_category') }}">

                                                    <div class="modal-body">

                                                        @csrf
                                                        <div class="form-body">

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="crop">Crop Name</label>
                                                                        <input type="text" id="crop" class="form-control" placeholder="Crop Name" name="crop">
                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="companyName">No Of Lots</label>
                                                                        <fieldset>
                                                                            <div class="input-group">
                                                                                <input type="text" class="touchspin" name="lots" value=""  data-bts-button-down-class="btn btn-green"
                                                                                       data-bts-button-up-class="btn btn-green"/>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="form-group">
                                                                <label for="description">Farm Description</label>
                                                                <textarea id="description" rows="5" class="form-control" name="description" placeholder="Farm Description"></textarea>
                                                            </div>

                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn grey btn-outline-danger" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-outline-green">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->

                                    <span class="dropdown">
                    <button type="button" data-toggle="modal" class="btn btn-warning btn-sm dropdown-toggle dropdown-menu-right" data-target="#catModal"><i class="ft-download white"></i> Add Categories</button>

                  </span>
                                    <button class="btn btn-success btn-sm"><i class="ft-settings white"></i></button>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Task List table -->
                                    <div class="table-responsive">
                                        <table id="project-task-list" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                                            <thead>
                                            <tr>
                                                <th>Lot No</th>
                                                <th>Crop</th>
                                                <th>Method</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- ABC Project -->
                                            @foreach($lots as $lot)
                                                <tr>
                                                    <td ><strong> {{ str_pad($lot->lot_no,7,'0',STR_PAD_LEFT) }} </strong></td>

                                                    <td>
                                                        <h6 class="mb-0">{{ $lot->crop_name }}
                                                            <br>
                                                            <span class="text-bold-600">{{ $lot->species}}</span>

                                                        </h6>

                                                    </td>

                                                    <td>  {{ $lot->method }} </td>

                                                    <td>
                                                        @if($lot->status)
                                                            <span class="badge badge-default badge-danger">Critical</span>
                                                        @else
                                                            <span class="badge badge-default badge-danger">Critical</span>
                                                        @endif
                                                    </td>



                                                    <td>
                                                        <span class="dropdown">
                                                          <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                                                  aria-expanded="false" class="btn btn-info dropdown-toggle"><i class="la la-cog"></i></button>
                                                          <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                            <a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
                                                            <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
                                                          </span>
                                                        </span>
                                                    </td>
                                                </tr>
                                            @endforeach


                                            </tbody>

                                        </table>
                                    </div>
                                    <!--/ Task List table -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('dashboard/vendors/js/tables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard/vendors/js/tables/datatable/dataTables.bootstrap4.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('dashboard/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('dashboard/vendors/js/tables/datatable/dataTables.rowReorder.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('dashboard/vendors/js/forms/icheck/icheck.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard/js/core/libraries/jquery_ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard/js/scripts/ui/jquery-ui/date-pickers.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard/vendors/js/forms/select/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js') }}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script>
        $(document).ready(function() {


            var groupingTable = $('.row-grouping').DataTable({
                responsive: false,
                autoWidth: false,
                rowReorder: true,
                "columnDefs": [

                    { "orderable": true, "className": 'reorder', "targets": 0 },
                    { "orderable": false, "targets": '_all' }
                ],
                // "order": [[ 2, 'desc' ]],
                "displayLength": 10,

            } );





            // Checkbox & Radio 1
            $('.icheck input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
            });

            $('#project-task-list').on( 'draw.dt', function () {
                // Checkbox & Radio 1
                $('.icheck input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                });
            } );

            $('#state').on('change', function() {
                $('#lgas_dropdown').empty();
                var id = $('#state').val();
                $('#lgas_dropdown').html('<option selected="selected" value="">Loading...</option>');

                var base = '{!! route('getlga') !!}';

                var url = base+'?id='+id ;



                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        console.log(data);

                        $('#lgas_dropdown').html('<option selected="selected" value="">Select LGA</option>');


                        $.each(data, function(key, value,oldval) {

                            $('#lgas_dropdown').append('<option value="'+key+'">'+value+'</option>');
                        });

                    }
                });
            });

            $(".touchspin").TouchSpin({
                min: 0,
                max: 100,
                boostat: 5,
                maxboostedstep: 10,
            });


        });


    </script>
    <!-- END PAGE LEVEL JS-->
@endsection
