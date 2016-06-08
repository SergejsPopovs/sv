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
        </header>
        
        <ul>
            <li><a href="/auth/logout">Izejas</a></li>
            <li><a href="/adminzone/photos">Fotoattēli</a> <a href="/adminzone/photos/create">pievienot jaunu</a></li>
            <li><a href="/adminzone/articles">Jaunumi</a> <a href="/adminzone/articles/create">pievienot jaunu</a></li>
            <li><a href="/adminzone/proles">Spēlētāja lomas</a> <a href="/adminzone/proles/create">pievienot jaunu</a></li>
            <li><a href="/adminzone/players">Spēlētāji</a> <a href="/adminzone/players/create">pievienot jaunu</a></li>
            <li><a href="/adminzone/events">Notikumi</a> <a href="/adminzone/events/create">pievienot jaunu</a></li>
        </ul>
        
        
        <div class="clear"></div>
    </body>
</html>