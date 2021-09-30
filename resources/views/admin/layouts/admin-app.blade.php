<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui@3.4.0/dist/css/coreui.min.css"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css"
          integrity="sha512-n+g8P11K/4RFlXnx2/RW1EZK25iYgolW6Qn7I0F96KxJibwATH3OoVCQPh/hzlc4dWAwplglKX8IVNVMWUUdsw=="
          crossorigin="anonymous"/>

    <title>Admin Bereich</title>
</head>
<body class="c-app">
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('home') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-home') }}"></use>
                </svg> {{ __('Team-Energy') }}</a></li>
        <li class="c-sidebar-nav-title">Verwaltung</li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('admin.users.index') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user')}}"></use>
                </svg>
                Benutzer</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('admin.teams.index') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-group') }}"></use>
                </svg>
                Teams</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('admin.results.index') }}">
                        <svg class="c-sidebar-nav-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-description') }}"></use>
                        </svg>
                        Ergebnis</a></li>

{{--        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a--}}
{{--                class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle">--}}
{{--                <svg class="c-sidebar-nav-icon">--}}
{{--                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-description') }}"></use>--}}
{{--                </svg>--}}
{{--                Ergebnis</a>--}}
{{--            <ul class="c-sidebar-nav-dropdown-items">--}}
{{--                <li class="active">--}}
{{--                <li class="c-sidebar-nav-item {{(request()->is('admin.results.index')) ? 'active' : ''}}"><a--}}
{{--                        class="c-sidebar-nav-link"--}}
{{--                        href="{{ route('admin.results.index') }}"><span--}}
{{--                            class="c-sidebar-nav-icon"></span> Ich im Team - Privat</a></li>--}}
{{--                </li>--}}
{{--                <li class="c-sidebar-nav-item {{(request()->is('admin.results.index')) ? 'active' : ''}}"><a--}}
{{--                        class="c-sidebar-nav-link" href="{{ route('admin.results.index') }}"><span--}}
{{--                            class="c-sidebar-nav-icon"></span> Ich im Team - Beruf</a></li>--}}
{{--                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span--}}
{{--                            class="c-sidebar-nav-icon"></span> Potential im Team</a></li>--}}
{{--                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span--}}
{{--                            class="c-sidebar-nav-icon"></span> Kultur - mein Einschätzung </a></li>--}}
{{--                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span--}}
{{--                            class="c-sidebar-nav-icon"></span> Kultur - unsere Einschätzungen </a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}

        <li class="c-sidebar-nav-divider"></li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
            data-class="c-sidebar-minimized"></button>
</div>

<div class="c-wrapper c-fixed-components">
    <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
                data-class="c-sidebar-show">
            <svg class="c-icon c-icon-lg">
                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
            </svg>
        </button>
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
                data-class="c-sidebar-lg-show" responsive="true">
            <svg class="c-icon c-icon-lg">
                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
            </svg>
        </button>
        <ul class="c-header-nav ml-auto mr-4">
            <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#"
                                                      role="button" aria-haspopup="true"
                                                      aria-expanded="false">{{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right pt-0">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <svg class="c-icon mr-2">
                            <use
                                xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                        </svg>
                        Abmeldung</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </header>
    <div class="c-body">
        <main class="c-main">
            @yield('content')
        </main>
    </div>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then CoreUI JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"
            integrity="sha512-yUNtg0k40IvRQNR20bJ4oH6QeQ/mgs9Lsa6V+3qxTj58u2r+JiAYOhOW0o+ijuMmqCtCEg7LZRA+T4t84/ayVA=="
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/@coreui/coreui@3.4.0/dist/js/coreui.min.js"></script>

</div>
</body>
</html>
