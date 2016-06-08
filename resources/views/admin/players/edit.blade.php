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
        
        <h2>Rediģēt spēlētāju</h2>
        <form method="POST" action="{{action('Admin\PlayersController@update',['player'=>$player->id])}}">
            vārds<br>
            <input type="text" name="name" value="{{$player->name}}"/><br>
            uzvārds<br>
            <input type="text" name="surname" value="{{$player->surname}}"/><br>
            e-pasts<br>
            <input type="text" name="email" value="{{$player->email}}"/><br>
            tālrunis<br>
            <input type="text" name="phone" value="{{$player->phone}}"/><br>
            apraksts<br>
            <input type="text" name="about" value="{{$player->about}}"/><br>
            attēls: 
            <select name="photo_id">
                @foreach($photos as $photo)
                    @if($player->photo_id == $photo->id)
                        <option value="{{$photo->id}}" selected>{{$photo->title}}</option>
                    @else
                        <option value="{{$photo->id}}">{{$photo->title}}</option>
                    @endif
                @endforeach
            </select><br>
            loma: 
            <select name="prole_id">
                @foreach($proles as $prole)
                    @if($player->prole_id == $prole->id)
                        <option value="{{$prole->id}}" selected>{{$prole->title}}</option>
                    @else
                        <option value="{{$prole->id}}">{{$prole->title}}</option>
                    @endif
                @endforeach
            </select><br>
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