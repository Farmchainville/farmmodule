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
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Security</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Security</a>
                                </li>
                                <li class="breadcrumb-item active">Password
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">

                </div>
            </div>

            <div class="content-body">
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-card-center">Change Password</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="card-text">
                                        <div  id="div-errors" class="pt-1">



                                        </div>
                                    </div>
                                    <form class="form" id="password" role="form" method="POST" action="{{ url('/security/password/change') }}">

                                     @csrf
                                    <div class="form-body">
                                            <div class="form-group">
                                                <label for="eventRegInput1">Current Password</label>
                                                <input type="password" id="eventRegInput1" class="form-control"  name="old_password">
                                            </div>
                                            <div class="form-group">
                                                <label for="eventRegInput2">New Password</label>
                                                <input type="password" id="eventRegInput2" class="form-control" name="new_password">
                                            </div>
                                            <div class="form-group">
                                                <label for="eventRegInput3">Confirm Password</label>
                                                <input type="password" id="eventRegInput3" class="form-control"
                                                       name="confirm_password">
                                            </div>

                                        </div>
                                        <div class="form-actions center">
                                            <button type="button" class="btn btn-warning mr-1">
                                                <i class="ft-x"></i> Cancel
                                            </button>
                                            <button type="submit" class="btn btn-success passwordbtn">
                                                <i class="la la-lock"></i> Save
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
                postfix: 'Sqm'
            });

            $('#password').on('submit', function(e) {
                e.preventDefault();

                var mdata = $(this).serializeArray(); // convert form to array


                $.ajax({
                    type: "POST",
                    url: '{!! route('change_password') !!}',
                    data: $.param(mdata),
                    beforeSend: function () {
                        $(':button').prop('disabled', true); // Disable all the buttons
                        $(".passwordbtn").find('i').toggleClass('la-lock la-spinner spinner')

                        jQuery("#div-errors").html('');

                    },

                    success:function(response) {
                        if(response.success)
                        {
                            $(':button').prop('disabled', false); // Enable all the button


                            toastr.success('Password changed successfully', 'Saved', {positionClass: 'toast-top-right', containerId: 'toast-top-right'});



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
                        $(".passwordbtn").find('i').toggleClass('la-spinner la-lock spinner');
                    },
                    error: function(xhr, status, text) {
                        $(':button').prop('disabled', false); // Enable all the button
                        $(".passwordbtn").find('i').toggleClass('la-spinner la-lock spinner');

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


        });


    </script>
    <!-- END PAGE LEVEL JS-->
@endsection
