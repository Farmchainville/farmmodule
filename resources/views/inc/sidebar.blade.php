<?php
/**
 * sidebar.php
 *
 * Author: chidimez
 *
 * The sidebar of each page (Backend)
 *
 */

?>

<div class="main-menu menu-fixed menu-dark menu-accordion   menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{url('/home')}}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>

            </li>
            <li class=" nav-item"><a href="#"><i class="la la-info"></i><span class="menu-title" data-i18n="nav.templates.main">Farm Units</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{url('manage/farm')}}" data-i18n="nav.templates.vert.main">Manage Farm</a>

                    </li>
                    <li><a class="menu-item" href="{{url('manage/lots')}}" data-i18n="nav.templates.horz.main">Manage Lots</a>

                    </li>

                    <!--
                    <li><a class="menu-item" href="{{url('manage/lots')}}" data-i18n="nav.templates.horz.main">Farming Season</a>

                    </li>
                    -->
                </ul>
            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.layouts">Farm Resources</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                                                                        data-placement="right" data-original-title="Layouts"></i>
            </li>
            <li class=" nav-item"><a href="{{url('manage/staff')}}"><i class="la la-user-plus"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Staff</span></a>

            </li>

            <li class=" navigation-header">
                <span data-i18n="nav.category.support">Account</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                                                                        data-placement="right" data-original-title="Support"></i>
            </li>
            <li class=" nav-item"><a href="{{url('security/password')}}"><i class="la la-lock"></i><span class="menu-title" data-i18n="nav.support_raise_support.main">Change Password</span></a>
            </li>

            <!--
            <li class=" navigation-header">
                <span data-i18n="nav.category.support">Support</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                                                                        data-placement="right" data-original-title="Support"></i>
            </li>
            <li class=" nav-item"><a href="http://support.pixinvent.com/"><i class="la la-support"></i><span class="menu-title" data-i18n="nav.support_raise_support.main">Raise Support</span></a>
            </li>
            <li class=" nav-item">
                <a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/documentation"><i class="la la-text-height"></i>
                    <span class="menu-title" data-i18n="nav.support_documentation.main">Documentation</span>
                </a>
            </li>
            -->
        </ul>
    </div>
</div>