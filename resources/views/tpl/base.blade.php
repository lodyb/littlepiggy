<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/nanoscroller.css">
    <link href='https://fonts.googleapis.com/css?family=Assistant' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    @stack('styles')
</head>
<body>

    <div class="container">
        @include('tpl.sidebar')
        <div class="main-panel">
            @include('tpl.topbar')
            <div class="nano">
                <div class="nano-content">
                    <div class="hero">
                        @yield('hero')
                    </div>
                    <main>
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.nanoscroller.min.js"></script>
    <script>$(".nano").nanoScroller();</script>
    @stack('scripts')
</body>
</html>