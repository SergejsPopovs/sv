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
        
        <h2>Jauns spēlētājs</h2>
        <form method="POST" action="{{action('Admin\PlayersController@store')}}">
            vārds<br>
            <input type="text" name="name"/><br>
            uzvārds<br>
            <input type="text" name="surname"/><br>
            e-pasts<br>
            <input type="text" name="email"/><br>
            tālrunis<br>
            <input type="text" name="phone"/><br>
            apraksts<br>
            <input type="text" name="about"/><br>
            attēls: 
            <select name="photo_id">
                @foreach($photos as $photo)
                    <option value="{{$photo->id}}">{{$photo->title}}</option>
                @endforeach
            </select><br>
            loma: 
            <select name="prole_id">
                @foreach($proles as $prole)
                    <option value="{{$prole->id}}">{{$prole->title}}</option>
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