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
        <h2>Jauns fotoattēls</h2>
        <form method="POST" action="{{action('Admin\PhotosController@store')}}" enctype="multipart/form-data">
            nosaukumss<br>
            <input type="text" name="title"/><br>
            autors<br>
            <input type="text" name="author"/><br>
            apraksts<br>
            <input type="text" name="about"/><br>
            platums<br>
            <input type="text" name="width"/><br>
            augstums<br>
            <input type="text" name="height"/><br>
            augšupielādēt fotoattēlu<br>
            <input type="file" name="img"><br>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="submit" value="Saglabāt"/>
        </form>
        @if(Session::has('message'))
            {{Session::get('message')}}
        @endif
        <div class="clear"></div>
    </body>
</html>