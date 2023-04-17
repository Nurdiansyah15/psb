<!-- Navbar -->
<nav class="navbar navbar-sticky" style="background-color: coral;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../assets/images/logo-kgs.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            <b>PSB</b>
        </a>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{asset('img/user-icon.png')}}" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>{{json_decode(Cookie::get('sipon_session'))->nis}}</strong>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><button class="dropdown-item" href="{{ url('/admin/logout') }}">Sign out</button></li>
            </ul>
        </div>
    </div>
</nav>