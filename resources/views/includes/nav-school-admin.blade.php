
    @extends('theme')

    @section('additional_headtag')
        <title>School Admin</title>
    @stop

    @section('body_content')

        @include('includes.nav-admin')

        <div class="container">
            <div class="row profile">
                <div class="col s12 m12 l3 hide-on-med-and-down">
                    <div class="profile-sidebar">
                        <!-- SIDEBAR USERPIC -->
                        <!-- SIDEBAR MENU -->
                        <div class="profile-usermenu">
                            <ul class="nav">
                                <li class="@if(strpos(url()->current(),'school-admin/dashboard')) active @endif nav_tab" id="dashboard">
                                    <a href="{{url('school-admin/dashboard')}}" class="waves-effect"><i class="material-icons">dashboard</i> Dashboard </a>
                                </li>
                                <li class="@if(strpos(url()->current(), 'school-admin/subject-category')) active @endif nav_tab" id="overview">
                                    <a href="{{url('school-admin/subject-category')}}" class="waves-effect"><i class="material-icons">person_add</i> Subject Categories</span></a>
                                </li>
                                <li class="@if(strpos(url()->current(), 'school-admin/grades')) active @endif nav_tab" id="overview">
                                    <a href="/school-admin/grades" class="waves-effect"><i class="material-icons">location_city</i> Grades</span></a>
                                </li>
                                <li class="@if(strpos(url()->current(), 'school-admin/curriculum')) active @endif nav_tab" id="overview">
                                    <a href="/school-admin/curriculum" class="waves-effect"><i class="material-icons">location_city</i> School Curriculum</span></a>
                                </li>
                                <li class="@if(strpos(url()->current(), 'school-admin/parents')) active @endif nav_tab" id="overview">
                                    <a href="/school-admin/parents" class="waves-effect"><i class="material-icons">room</i> Parents</span></a>
                                </li>
                                <li class="@if(strpos(url()->current(), 'school-admin/teachers')) active @endif nav_tab" id="settings">
                                    <a href="/school-admin/teachers" class="waves-effect"><i class="material-icons">contacts</i>Teachers </a>
                                </li>
                                <li class="@if(strpos(url()->current(), 'school-admin/announcements')) active @endif nav_tab" id="settings">
                                    <a href="/school-admin/announcements" class="waves-effect"><i class="material-icons">contacts</i>Announcements </a>
                                </li>
                            </ul>
                        </div>
                      <!-- END MENU -->



                    </div>
                </div>

                <div class="col s12  m12 l9">

                    @yield('school-admin-content')

                </div>
            </div>
        </div>

    @stop
