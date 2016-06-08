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
        
        <h2>Rediģēt fotoattēli</h2>
            <form method="POST" action="{{action('Admin\PhotosController@update',['photo'=>$photo->id])}}">
                nosaukumss<br>
                <input type="text" name="title" value="{{$photo->title}}"/><br>
                autors<br>
                <input type="text" name="author" value="{{$photo->author}}"/><br>
                apraksts<br>
                <input type="text" name="about" value="{{$photo->about}}"/><br>
                platums<br>
                <input type="text" name="width" value="{{$photo->width}}"/><br>
                augstums<br>
                <input type="text" name="height" value="{{$photo->height}}"/><br>
                <input type="hidden" name="_method" value="put"/>
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <input type="submit" value="Saglabāt"/>
            </form>
        @if(Session::has('message'))
            {{Session::get('message')}}
        @endif
        
        <div class="clear"></div>
    </body>
</html>