<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>{{isset($title) ? $title : 'LSV'}}</title>
        <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon"/>
        <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
    </head>
    
    <body>
        <header id="page_header">
            <img id="img_logo" width="100" height="100" src="/img/logo/logo.png" alt="logo.png"></img>
            <h1>Latvijas sēdvolejbols </h1>
            <div class="clear"></div>
            <nav id="header_navigacija">
                <ul>
                    <li><a href="/home">Jaunumi</a></li>
                    <li><a href="/history">Vēsture</a></li>
                    <li><a href="/players">Spēlētāji</a></li>
                    <li><a href="/events">Kalendārs</a></li>
                    <li><a href="/about">Par mums</a></li>
                </ul>
            </nav>
        </header>
        @yield('content')
        <section id="sidebar">
            <article class="news">
                <a href="https://www.facebook.com/groups/sittingvolleyball/" target="_blank"><img src="/img/icons/fb.png" alt="facebook"></a>
                <a href="http://www.lpkomiteja.lv/lpk/latvijas-invalidu-sedvolejbola-asociacija" target="_blank"><img src="/img/icons/lpk.png" alt="lpk"></a>
            </article>
        </section>
        <div class="clear"></div>
        <footer id="page_footer">
        <p>tālrunis 67809433</p>
        </footer>
    </body>
</html>

