@extends('layouts.app')

@section('css')
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/core/menu/menu-types/vertical-menu-modern.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/core/colors/palette-gradient.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendors/css/extensions/sweetalert.css') }}">
<!-- END Page Level CSS-->
@endsection


@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Manage Farm</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Manage</a>
                                </li>
                                <li class="breadcrumb-item active">Farm
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
                                <h4 class="card-title">My Farms</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                            data-target="#iconModal">
                                        <i class="ft-plus white"></i> Add Farm
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

                                                <form id="farmform" method="POST" action="{{ route('create_farm') }}" enctype="multipart/form-data">

                                                <div class="modal-body">

                                                    @csrf
                                                        <div class="form-body">

                                                            <div class="form-group">
                                                                <label for="companyName">Farm Name</label>
                                                                <input type="text" id="name"  class="form-control" placeholder="Farm Name"
                                                                       name="name">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="state">State</label>
                                                                        <select id="state" name="state" class="form-control">
                                                                            <option value="" selected="" disabled="">Select State</option>
                                                                            @foreach($states as $id => $state )
                                                                                <option value="{{ $id }}" >{{ $state }}</option>
                                                                            @endforeach
                                                                        </select>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="lgas_dropdown">LGA</label>
                                                                        <select id="lgas_dropdown" name="lga" class="form-control">
                                                                            <option value="" selected="" disabled="">Select LGA</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="companyName">Farm Size</label>
                                                                        <fieldset>
                                                                            <div class="input-group">
                                                                                <input type="text" class="touchspin" name="size" value="" data-bts-postfix="Sqm" data-bts-button-down-class="btn btn-green"
                                                                                       data-bts-button-up-class="btn btn-green"/>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="form-group">
                                                                <label>Farm Photo</label>
                                                                <label id="projectinput7" class="file center-block">
                                                                    <input type="file" id="file" name="cover_image">
                                                                    <span class="file-custom"></span>
                                                                </label>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="description">Farm Description</label>
                                                                <textarea id="description" rows="5" class="form-control" name="description" placeholder="Farm Description"></textarea>
                                                            </div>

                                                        </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn grey btn-outline-danger" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-outline-green farmbtn"><i class="fa fa-check"></i> Save changes</button>
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
                                                <th>Farm Key</th>
                                                <th>Name</th>
                                                <th>Size</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- ABC Project -->
                                            @foreach($farms as $farm)
                                                <tr>
                                                    <td ><strong> {{ $farm->key }} </strong></td>

                                                    <td>
                                                        <h6 class="mb-0">{{ $farm->name }}
                                                            <br>
                                                            <span class="text-bold-600">{{ $farm->state}}</span>
                                                            <em>{{ $farm->lga }}</em>
                                                        </h6>

                                                    </td>

                                                    <td>  {{ $farm->size }} </td>

                                                    <td>
                                                        @if($farm->status)
                                                            <span class="badge badge-default badge-success">Running</span>
                                                        @else
                                                            <span class="badge badge-default badge-danger">Critical</span>
                                                        @endif
                                                    </td>



                                                    <td>
                                                        <span class="dropdown">
                                                          <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                                                  aria-expanded="false" class="btn btn-success dropdown-toggle"><i class="la la-cog"></i></button>
                                                          <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                           <a href="{{url('farm/qrcode/'.$farm->id)}}" class="dropdown-item"><i class="la la-qrcode"></i> Barcode</a>
                                                            <button class="dropdown-item edit-item" data-item-id="{{ $farm->id }}"><i class="ft-edit-2"></i> Edit Farm</button>
                                                            <div class="dropdown-divider"></div>
                                                            <button onclick="del_row(this, {{ $farm->id }} )" class="dropdown-item"><i class="ft-trash"></i> Delete Farm</button>
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

                <!-- Attachment Modal -->

                <div class="modal fade text-left" id="edit-farm" tabindex="-1" role="dialog" aria-labelledby="edit-farm-label"
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
                            <div  id="div-editerrors" class="pt-1">



                            </div>

                            <form id="editfarmform" method="POST" action="{{ route('edit_farm') }}" enctype="multipart/form-data">

                                <div class="modal-body">

                                    @csrf
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label for="companyName">Farm Name</label>
                                            <input type="text" id="editname"  class="form-control" placeholder="Farm Name"
                                                   name="editname">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="editstate">State</label>
                                                    <select id="editstate" name="editstate" class="form-control">
                                                        <option value="" selected="" disabled="">Select State</option>
                                                        @foreach($states as $id => $state )
                                                            <option value="{{ $id }}" >{{ $state }}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="editlgas_dropdown">LGA</label>
                                                    <select id="editlgas_dropdown" name="editlga" class="form-control">
                                                        <option value="" selected="" disabled="">Select LGA</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="editsize">Farm Size</label>
                                                    <fieldset>
                                                        <div class="input-group">
                                                            <input id="editsize" type="text" class="touchspin" name="editsize" value="" data-bts-postfix="Sqm" data-bts-button-down-class="btn btn-green"
                                                                   data-bts-button-up-class="btn btn-green"/>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label>Farm Photo</label>
                                            <label id="projectinput7" class="file center-block">
                                                <input type="file" id="editfile" name="editcover_image">
                                                <span id="efile" class="file-custom"></span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Farm Description</label>
                                            <textarea id="editdescription" rows="5" class="form-control" name="editdescription" placeholder="Farm Description"></textarea>
                                        </div>

                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn grey btn-outline-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-outline-green farmbtn" disabled><i class="fa fa-check"></i> Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- /Attachment Modal -->

            </div>
        </div>
    </div>
@endsection


@section('js')
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('dashboard/vendors/js/extensions/sweetalert.min.js') }}" type="text/javascript"></script>
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
        var lga = '';

        function del_row(elem,id)
        {
            var MyId = id;


            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this record",
                icon: "warning",
                buttons: {
                    cancel: {
                        text: "Cancel",
                        value: null,
                        visible: true,
                        className: "",
                        closeModal: false,
                    },
                    confirm: {
                        text: "Delete",
                        value: true,
                        visible: true,
                        className: "",
                        closeModal: false
                    }
                }
            })
                .then((isConfirm) => {
                    if (isConfirm) {

                        $(elem).find('i').toggleClass('ft-trash fa-spinner fa-spin');

                        $.ajax
                        ({
                            type:'post',
                            url:url+'/delete_user',
                            data:{
                                flag:'delete_user',
                                id:id,
                            },
                            success:function(response) {
                                if(response.success)
                                {

                                    toastr.success('Farm deleted successfully', 'Saved', {positionClass: 'toast-top-right', containerId: 'toast-top-right'});

                                    setTimeout(function () {
                                        // similar behavior as an HTTP redirect
                                        //var url = '{{ URL::asset('/ticket/all') }}';
                                        //window.location.replace(url);
                                        location.reload();
                                    }, 2000); //will call the function after 2 secs.


                                    //$('#users_table').DataTable().ajax.reload();

                                }
                            },
                            error: function(xhr, status, text) {


                                toastr.error('Something went wrong', 'Error', {positionClass: 'toast-top-right', containerId: 'toast-top-right'});

                            }
                        });

                    } else {
                        swal("Cancelled", "Operation Cancelled", "error");
                    }
                });




        };

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

            $('#state').change();

            $(".touchspin").TouchSpin({
                min: 0,
                max: 100,
                boostat: 5,
                maxboostedstep: 10,
                postfix: 'Sqm'
            });


            $('#farmform').on('submit', function(e) {
                e.preventDefault();

                var mdata = $(this).serializeArray(); // convert form to array


                $.ajax({
                    type: "POST",
                    url: '{!! route('create_farm') !!}',
                    data: $.param(mdata),
                    beforeSend: function () {
                        $(':button').prop('disabled', true); // Disable all the buttons
                        $(".farmbtn").find('i').toggleClass('fa-check fa-spinner fa-spin');
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


                            toastr.success('Farm added successfully', 'Saved', {positionClass: 'toast-top-right', containerId: 'toast-top-right'});

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
                        $(".farmbtn").find('i').toggleClass('fa-spinner fa-check fa-spin');
                    },
                    error: function(xhr, status, text) {
                        $(':button').prop('disabled', false); // Enable all the button
                        $(".farmbtn").find('i').toggleClass('fa-spinner fa-check fa-spin');

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

                var base = '{!! route('getfarm') !!}';

                var url = base+'?id='+id ;


                var name = '';
                var state = '';

                var size = '';
                var image = '';
                var description = '';

                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        // get the data

                        name = data['name'];
                        state = data['state'];
                        lga = data['lga'];
                        size = data['size'];
                        image = data['image'];
                        description = data['description'];

                        //do what you need here
                        $("#editname").val(name);
                        $("#editstate option[value=" + state + "]").prop("selected",true);


                        $("#editstate").change();




                        $("#editsize").val(size);
                        //$("#efile").val(image);
                        document.getElementById("efile").textContent=image;
                        $("#editdescription").val(description);


                        $('#edit-farm').modal();




                    }
                });




                // fill the data in the input fields



            })

            // on modal show

            $('#edit-farm').on('show.bs.modal', function() {
                var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
                var row = el.closest(".data-row");

                var id = el.data('item-id');






            });

            // on modal hide
            $('#edit-farm').on('hide.bs.modal', function() {
                $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
                $("#edit-form").trigger("reset");
            })


            $('#editstate').on('change', function() {
                $('#editlgas_dropdown').empty();
                var id = $('#editstate').val();
                $('#editlgas_dropdown').html('<option selected="selected" value="">Loading...</option>');

                var base = '{!! route('getlga') !!}';

                var url = base+'?id='+id ;



                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        //console.log(data);

                        $('#editlgas_dropdown').html('<option selected="selected" value="">Select LGA</option>');


                        $.each(data, function(key, value,oldval) {


                            $('#editlgas_dropdown').append('<option value="'+key+'">'+value+'</option>');
                        });

                        if(lga){
                            $("#editlgas_dropdown option[value=" + lga + "]").prop("selected",true);
                        }

                    }
                });
            });






        });



    </script>
    <!-- END PAGE LEVEL JS-->
@endsection
