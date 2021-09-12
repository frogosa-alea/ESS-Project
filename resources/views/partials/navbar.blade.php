<!DOCTYPE html>
<html>
    <body>
        <nav class="navbar navbar-expand-custom navbar-mainbg">
            <a class="navbar-brand navbar-logo" href=""{{ route('home') }}"">AMSAI Learning School</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                    <li class="nav-item {{ (request()->is('home')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item {{ (request()->is('grade')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('grade') }}">Grades</a>
                    </li>
                    <li class="nav-item {{ (request()->is('behavior')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('behavior') }}">Behavior</a>
                    </li>
                    <li class="nav-item {{ (request()->is('schedule')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('schedule') }}"></i>Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);"><i class="fa fa-bell" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);"><i class="fa fa-user" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>

