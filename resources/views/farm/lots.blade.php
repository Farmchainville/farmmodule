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
                    <h3 class="content-header-title">Manage Lots</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Manage</a>
                                </li>
                                <li class="breadcrumb-item active">Lots
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    
                </div>
            </div>
            <div class="content-body">
                <section class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Farm Lots</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">

                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                            data-target="#iconModal">
                                        <i class="ft-plus white"></i> Add Lot
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
                                                <br>
                                                <div  id="div-errors" class="pt-1">



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
                                                                        <select id="fmethod" name="farm_method" class="form-control">
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
                                                                                <input type="text" class="touchspin" name="no_of_lots" value=""  data-bts-button-down-class="btn btn-green"
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
                                                    <button type="submit" class="btn btn-outline-green lotbtn"><i class="fa fa-check"></i> Save changes</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


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
                                                            <span class="badge badge-default badge-success">Available</span>
                                                        @else
                                                            <span class="badge badge-default badge-danger">Available</span>
                                                        @endif
                                                    </td>



                                                    <td>
                                                        <span class="dropdown">
                                                          <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                                                  aria-expanded="false" class="btn btn-success dropdown-toggle"><i class="la la-cog"></i></button>
                                                          <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                            <!--<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>-->
                                                            <button class="dropdown-item edit-item" data-item-id="{{ $lot->id }}"><i class="ft-edit-2"></i> Edit Lot</button>
                                                            <div class="dropdown-divider"></div>
                                                            <a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Lot</a>
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

                <!-- Modal -->
                <div class="modal fade text-left" id="edit-lot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel2"><i class="ft-user"></i> Farm Information</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <br>
                            <div  id="div-errors" class="pt-1">



                            </div>

                            <form id="editlotform" method="POST" action="{{ route('create_lots') }}" enctype="multipart/form-data">

                                <div class="modal-body">

                                    @csrf
                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="editfarm">Farm</label>
                                                    <select id="editfarm" name="editfarm" class="form-control">
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
                                                    <label for="editcrop">Crop Name</label>
                                                    <input type="text" id="editcrop" class="form-control" placeholder="Crop Name" name="editcrop">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="specie">Crop Specie</label>
                                                    <input type="text" id="editspecie" class="form-control" placeholder="Crop Specie" name="editspecie">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="fmethod">Farming Method</label>
                                                    <select id="fmethod" name="farmig_method" class="form-control">
                                                        <option value="" selected="" disabled="">Select Farming Method</option>
                                                        <option value="Organic Farming" >Organic Farming</option>
                                                        <option value="Non-Organic Farmin" >Non-Organic Farming</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn grey btn-outline-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-outline-green editlotbtn" disabled><i class="fa fa-check"></i> Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

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


            $(".touchspin").TouchSpin({
                min: 0,
                max: 100,
                boostat: 5,
                maxboostedstep: 10,
            });

            $('#lotform').on('submit', function(e) {
                e.preventDefault();

                var mdata = $(this).serializeArray(); // convert form to array


                $.ajax({
                    type: "POST",
                    url: '{!! route('create_lots') !!}',
                    data: $.param(mdata),
                    beforeSend: function () {
                        $(':button').prop('disabled', true); // Disable all the buttons
                        $(".lotbtn").find('i').toggleClass('fa-check fa-spinner fa-spin');
                        //var espan = {"name":[""],"state":[""],"lga":[""],"size":[""],"description":[""]};
                        //$.each(espan, function (key, value) {
                        //  $('.'+key+'-error').html(value);
                        //});
                        jQuery("#div-errors").html('');

                    },

                    success:function(response) {
                        if(response.success)
                        {
                            $(':button').prop('disabled', false); // Enable all the button


                            toastr.success('Lots created successfully', 'Saved', {positionClass: 'toast-top-right', containerId: 'toast-top-right'});

                            setTimeout(function () {
                                // similar behavior as an HTTP redirect
                                //var url = '{{ URL::asset('/ticket/all') }}';
                                //window.location.replace(url);
                                location.reload();
                            }, 2000); //will call the function after 2 secs.



                        }
                        else{
                            $(':button').prop('disabled', false); // Enable all the button


                            toastr.error('Please fix the errors on the form', 'Errors Occured', {positionClass: 'toast-top-right', containerId: 'toast-top-right'});



                            var errorHtml = '';
                            errorHtml+='<div class="alert bg-danger alert-icon-left alert-dismissible mb-2" role="alert"><span class="alert-icon"><i class="la la-warning"></i></span>';
                            errorHtml+='<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                            //errorHtml+='<h3 class="font-w300 push-15">Please fix the errors on the form</h3>';

                            //errorHtml+='<ul>';

                            var lp = 0;
                            var first_err = 'Something went wrong';

                            $.each(response.errors, function (key, value) {
                                //$('.'+key+'-error').html(value);
                                // errorHtml+='<li>' + value + '</li>';
                                if(lp === 0){
                                    first_err = value;
                                }
                                lp++;

                            });

                            //var req = { mandrill_events: '[{"event":"inbound","ts":1426249238}]' };


                            errorHtml+= ''+ first_err;
                            // errorHtml+='</ul>';
                            errorHtml+='</div>';
                            $( '#div-errors' ).html( errorHtml );
                        }
                        $(".lotbtn").find('i').toggleClass('fa-spinner fa-check fa-spin');
                    },
                    error: function(xhr, status, text) {
                        $(':button').prop('disabled', false); // Enable all the button
                        $(".lotbtn").find('i').toggleClass('fa-spinner fa-check fa-spin');

                        // check if xhr.status is defined in $.ajax.statusCode
                        // if true, return false to stop this function
                        if (typeof this.statusCode[xhr.status] !== 'undefined') {
                            return false;
                        }
                        // else continue

                        toastr.error('Something went wrong', 'Error', {positionClass: 'toast-top-right', containerId: 'toast-top-right'});


                    },
                    statusCode: {
                        419: function(response) {
                            location.reload();
                        },

                    }


                });
            });



            /**
             * for showing edit item popup
             */

            $(document).on('click', ".edit-item", function() {
                $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

                var id = $(this).data('item-id');

                var base = '{!! route('getlot') !!}';

                var url = base+'?id='+id ;


                var farmid = '';
                var crop = '';

                var specie = '';
                var fmethod = '';


                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        // get the data

                        farmid = data['farm_id'];
                        crop = data['crop_name'];
                        specie = data['crop_specie'];
                        fmethod = data['method'];


                        //do what you need here
                        $("#editfarm option[value=" + farmid + "]").prop("selected",true);

                        $("#editcrop").val(crop);
                        $("#editspecie").val(specie);
                        //$("#efile").val(image);
                        $("#fmethod option[value='" + fmethod + "']").prop("selected",true);



                        $('#edit-lot').modal();




                    }
                });




                // fill the data in the input fields



            })

            // on modal show

            $('#edit-lot').on('show.bs.modal', function() {
                var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
                var row = el.closest(".data-row");

                var id = el.data('item-id');






            });

            // on modal hide
            $('#edit-lot').on('hide.bs.modal', function() {
                $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
                $("#edit-form").trigger("reset");
            })



        });


    </script>
    <!-- END PAGE LEVEL JS-->
@endsection
