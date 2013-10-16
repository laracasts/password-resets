<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/main.css">
    </head>

    <body>
        @include ('layouts.partials.nav')

        <div class="container wrap">
            <aside class="sidebar">
                <h2 class="heading-top">Sidebar</h2>
            </aside>

            <div class="content">
                @yield('content')
            </div>
        </div>

        @include ('layouts.partials.footer')
    </body>
</html>
