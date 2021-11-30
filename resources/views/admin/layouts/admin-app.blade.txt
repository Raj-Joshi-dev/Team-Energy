
    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Bereich</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

    <!-- Jquery for Admin Panel -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- Custom styles for this template -->
    {{--  <link href="css/simple-sidebar.css" rel="stylesheet">--}}
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">

</head>

<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Admin Bereich</div>
        <div class="list-group list-group-flush">
            <a href="{{ route('admin.users.index') }}" class="list-group-item list-group-item-action bg-light">Benutzerverwaltung</a>
            <a href="{{ route('admin.teams.index') }}" class="list-group-item list-group-item-action bg-light">Teams</a>
            <a href="{{ route('admin.results.index') }}" class="list-group-item list-group-item-action bg-light">Ergebnisverwaltung</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
{{--            <button class="btn btn-link btn-sm order-1 order-lg-0" id="menu-toggle">Toggle Menu</button>--}}
            <button class="btn btn-link btn-lg order-1 order-lg-0" id="menu-toggle"><i class="fas fa-bars"></i></button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Startseite <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Abmeldung') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
{{--            <h1 class="mt-4">Simple Sidebar</h1>--}}
{{--            <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on--}}
{{--                larger screens. When toggled using the button below, the menu will change.</p>--}}
{{--            <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is--}}
{{--                optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which--}}
{{--                will toggle the menu when clicked.</p>--}}

                <main class="py-3">
                    @yield('content')
                </main>

        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Menu Toggle Script -->
<script type="application/javascript">
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>

