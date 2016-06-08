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
        
        <h2>Jauns ieraksts</h2>
        <form method="POST" action="{{action('Admin\ArticlesController@store')}}">
            nosaukumss<br>
            <input type="text" name="title"/><br>
            autors<br>
            <input type="text" name="author"/><br>
            īss teksts<br>
            <input type="text" name="short_text"/><br>
            pilns teksts<br>
            <input type="text" name="full_text"/><br>
            attēls: 
            <select name="photo_id">
                @foreach($photos as $photo)
                    <option value="{{$photo->id}}">{{$photo->title}}</option>
                @endforeach
            </select><br>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="submit" value="Saglabāt"/>
        </form>
        @if(Session::has('message'))
            {{Session::get('message')}}
        @endif
        
        <div class="clear"></div>
    </body>
</html>