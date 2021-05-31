<div class="left-side-bar">

    <div class="menu-block customscroll">
        <div class="sidebar-menu">

            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">

                        <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                    </a>
                    @if (Auth::user()->role == 'admin')
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Register Patient</span>
                    </a>
                    <ul class="submenu">

                        <li><a href="{{ route('user.list') }}">Total Register Patient</a></li>

                    </ul>


                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Labtechnical</span>

                    </a>
                    <ul class="submenu">

                        <li><a href="{{ route('labtechnical.list') }}">Labtechnical List</a></li>

                    </ul>
                    <ul class="submenu">

                        <li><a href="{{ route('todayappointment.view') }}">Today Appointment List</a></li>

                    </ul>
                    <ul class="submenu">

                        <li><a href="{{ route('labtechnical.form') }}">Labtechnical Form</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Department</span>

                    </a>

                    <ul class="submenu">

                        <li><a href="{{ route('department.form') }}">Department Form</a></li>

                    </ul>

                    <ul class="submenu">

                        <li><a href="{{ route('department.list') }}">Department List</a></li>

                    </ul>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Doctor</span>

                    </a>
                    <ul class="submenu">

                        <li><a href="{{ route('doctor.list') }}">Doctor List</a></li>

                    </ul>
                    <ul class="submenu">

                        <li><a href="{{ route('doctor.form') }}">Doctor Form</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Appointment</span>
                    </a>
                    {{-- <ul class="submenu">
                            <li><a href="{{route('appointment.form')}}">Appointment Form</a></li>
                        </ul> --}}

                    <ul class="submenu">
                        <li><a href="{{ route('appointment.list') }}">Appointment All</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="{{ route('appointment.new') }}">Appointment New</a></li>
                        {{-- <li><a href="{{ route('appointment.accepted') }}">Appointment New</a></li> --}}
                    </ul>
                    <ul class="submenu">
                        <li><a href="{{ route('timeslot.form') }}"> Time Slot</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="{{ route('timeslot.list') }}">Appointment Time list</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Test information
                        </span>

                    </a>
                    <ul class="submenu">

                        <li><a href="{{ route('testinformation.list') }}">Test List</a></li>

                    </ul>
                    <ul class="submenu">

                        <li><a href="{{ route('testinformation.form') }}">Test Form</a></li>

                    </ul>
                </li>
                @endif

                @if (Auth::user()->role == 'doctor')
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-edit2"></span><span class="mtext">Patient Appointment</span>

                        </a>

                        <ul class="submenu">

                            <li><a href="{{ route('patient.list') }}">Patient Appointment List</a></li>

                        </ul>

                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-edit2"></span><span class="mtext">Doctor</span>

                        </a>
                        <ul class="submenu">

                            <li><a href="{{ route('doctor.form') }}">Doctor Form</a></li>

                        </ul>

                    </li>
                @endif

                @if (Auth::user()->role == 'labtechnical')

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Lab Technician</span>

                    </a>
                    <ul class="submenu">

                        <li><a href="{{ route('labtechnical.list') }}">Labtechnical List</a></li>

                    </ul>
                    <ul class="submenu">

                        <li><a href="{{ route('todayappointment.view') }}">Today Appointment List</a></li>

                    </ul>

                </li>
                @endif
            </ul>


        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
