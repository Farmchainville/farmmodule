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
                    <h3 class="content-header-title mb-0 d-inline-block">Staff</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Manage</a>
                                </li>
                                <li class="breadcrumb-item active">Staff
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">

                </div>
            </div>
            <div class="content-detached">
                <div class="content-body">
                    <section class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-head">
                                    <div class="card-header">
                                        <h4 class="card-title">All Staff</h4>
                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <button class="btn btn-success btn-sm" disabled><i class="ft-user-plus white"></i> Add Staff</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <!-- Task List table -->
                                        <div class="table-responsive">
                                            <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Category</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <!--
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Alice Collins</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">alice@example.com</a>
                                                    </td>
                                                    <td>+658-254-256</td>
                                                    <td class="text-center"><i class="la la-star  yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Margaret Govan</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">margaret@example.com</a>
                                                    </td>
                                                    <td>+125-654-564</td>
                                                    <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop3" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop3" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-4.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Eugene Woods</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">eugene@example.com</a>
                                                    </td>
                                                    <td>+987-654-564</td>
                                                    <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop4" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop4" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Russell Bryant</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">russell@example.com</a>
                                                    </td>
                                                    <td>+235-654-564</td>
                                                    <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop5" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop5" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Cynthia Tucker</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">cynthia@example.com</a>
                                                    </td>
                                                    <td>+987-654-564</td>
                                                    <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop6" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop6" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-busy rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Scott Marshall</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">scott@example.com</a>
                                                    </td>
                                                    <td>+954-654-564</td>
                                                    <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop7" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop7" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-away rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-8.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Catherine Smith</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">catherine@example.com</a>
                                                    </td>
                                                    <td>+254-654-564</td>
                                                    <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop8" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop8" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-off rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Eric Howard</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">eric@example.com</a>
                                                    </td>
                                                    <td>+545-654-564</td>
                                                    <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop9" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop9" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-9.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Donald Watkins</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">donald@example.com</a>
                                                    </td>
                                                    <td>+987-654-564</td>
                                                    <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop10" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop10" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-10.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Brittany Barnes</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">brittany@example.com</a>
                                                    </td>
                                                    <td>+632-654-564</td>
                                                    <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop11" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop11" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-busy rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Scott Marshall</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">scott@example.com</a>
                                                    </td>
                                                    <td>+954-654-564</td>
                                                    <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop12" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop12" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-away rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-8.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Catherine Smith</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">catherine@example.com</a>
                                                    </td>
                                                    <td>+254-654-564</td>
                                                    <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop13" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop13" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-off rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Eric Howard</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">eric@example.com</a>
                                                    </td>
                                                    <td>+545-654-564</td>
                                                    <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop14" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop14" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-9.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Donald Watkins</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">donald@example.com</a>
                                                    </td>
                                                    <td>+987-654-564</td>
                                                    <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop15" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop15" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-10.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Brittany Barnes</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">brittany@example.com</a>
                                                    </td>
                                                    <td>+632-654-564</td>
                                                    <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop16" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop16" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Alice Collins</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">alice@example.com</a>
                                                    </td>
                                                    <td>+658-254-256</td>
                                                    <td class="text-center"><i class="la la-star  yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop17" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop17" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Margaret Govan</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">margaret@example.com</a>
                                                    </td>
                                                    <td>+125-654-564</td>
                                                    <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop18" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop18" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-4.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Eugene Woods</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">eugene@example.com</a>
                                                    </td>
                                                    <td>+987-654-564</td>
                                                    <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop19" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop19" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Russell Bryant</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">russell@example.com</a>
                                                    </td>
                                                    <td>+235-654-564</td>
                                                    <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop20" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop20" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Cynthia Tucker</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">cynthia@example.com</a>
                                                    </td>
                                                    <td>+987-654-564</td>
                                                    <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop21" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop21" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-4.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Eugene Woods</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">eugene@example.com</a>
                                                    </td>
                                                    <td>+987-654-564</td>
                                                    <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop22" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop22" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Russell Bryant</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">russell@example.com</a>
                                                    </td>
                                                    <td>+235-654-564</td>
                                                    <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop23" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop23" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Cynthia Tucker</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">cynthia@example.com</a>
                                                    </td>
                                                    <td>+987-654-564</td>
                                                    <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop24" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop24" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Alice Collins</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">alice@example.com</a>
                                                    </td>
                                                    <td>+658-254-256</td>
                                                    <td class="text-center"><i class="la la-star  yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop25" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop25" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Margaret Govan</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">margaret@example.com</a>
                                                    </td>
                                                    <td>+125-654-564</td>
                                                    <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop26" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop26" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-busy rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Scott Marshall</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">scott@example.com</a>
                                                    </td>
                                                    <td>+954-654-564</td>
                                                    <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop27" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop27" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-away rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-8.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Catherine Smith</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">catherine@example.com</a>
                                                    </td>
                                                    <td>+254-654-564</td>
                                                    <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop28" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop28" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-off rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Eric Howard</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">eric@example.com</a>
                                                    </td>
                                                    <td>+545-654-564</td>
                                                    <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop29" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop29" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-9.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Donald Watkins</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">donald@example.com</a>
                                                    </td>
                                                    <td>+987-654-564</td>
                                                    <td class="text-center"><i class="la la-star yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop30" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop30" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="input-chk">
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-10.png" alt="avatar"><i></i></span>
                                                            </div>
                                                            <div class="media-body media-middle">
                                                                <a href="#" class="media-heading">Brittany Barnes</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="mailto:email@example.com">brittany@example.com</a>
                                                    </td>
                                                    <td>+632-654-564</td>
                                                    <td class="text-center"><i class="la la-star-o yellow darken-2"></i></td>
                                                    <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop31" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop31" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Edit</a>
                                  <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Delete</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
                                  <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
                                </span>
                              </span>
                                                    </td>
                                                </tr>
                                                -->
                                                </tbody>
                                                <tfoot>
                                                <tr>

                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Category</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!--
            <div class="sidebar-detached">
                <div class="sidebar">
                    <div class="bug-list-sidebar-content">
                        <!-- Predefined Views
                        <div class="card">
                            <div class="card-head">
                                <div class="media p-1">
                                    <div class="media-left pr-1">
                    <span class="avatar avatar-sm avatar-online rounded-circle">
                      <img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h5 class="media-heading">Margaret Govan</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- contacts search
                            <div class="card-body border-top-blue-grey border-top-lighten-5">
                                <div class="bug-list-search">
                                    <div class="bug-list-search-content">
                                        <form action="#">
                                            <div class="position-relative">
                                                <input type="search" id="search-contacts" class="form-control" placeholder="Search contacts...">
                                                <div class="form-control-position">
                                                    <i class="la la-search text-size-base text-muted"></i>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /contacts search
                            <!-- contacts view
                            <div class="card-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item active">All Contacts</a>
                                    <a href="#" class="list-group-item list-group-item-action">Recently contacted</a>
                                    <a href="#" class="list-group-item list-group-item-action">Favorite contacts</a>
                                </div>
                            </div>
                            <!-- Groups
                            <div class="card-body">
                                <p class="lead">Groups</p>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="badge badge-primary badge-pill float-right">14</span> <a href="#"> Project</a>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-info badge-pill float-right">22</span> <a href="#"> Team</a>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-warning badge-pill float-right">10</span> <a href="#"> Clients</a>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-success badge-pill float-right">5</span> <a href="#"> Friends</a>
                                    </li>
                                </ul>
                            </div>
                            <!--/ Groups
                            <!--More
                            <div class="card-body ">
                                <p class="lead">More</p>
                                <ul class="list-group">
                                    <li><a href="#" class="list-group-item">Import</a></li>
                                    <li><a href="#" class="list-group-item">Export</a></li>
                                    <li><a href="#" class="list-group-item">Print</a></li>
                                    <li><a href="#" class="list-group-item">Restore contacts</a></li>
                                    <li><a href="#" class="list-group-item">Find duplicate</a></li>
                                </ul>
                            </div>
                            <!--/More
                        </div>
                        <!--/ Predefined Views
                    </div>
                </div>
            </div>
           -->
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
                postfix: 'Sqm'
            });


        });


    </script>
    <!-- END PAGE LEVEL JS-->
@endsection
