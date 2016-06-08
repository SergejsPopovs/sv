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
        
        <h2>Spēlētāju saraksts</h2>
        <table id="from-post">
            <tr>
                <th>id</th>
                <th>attēls</th>
                <th>loma</th>
                <th>vārds</th>
                <th>uzvārds</th>
                <th>e-pasts</th>
                <th>tālrunis</th>
                <th>apraksts</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($players as $player)
            <tr>
                <td>{{$player->id}}</td>
                <td><img width="100" height="100" src="{{$player->photo->location}}"</td>
                <td>{{$player->prole->title}}</td>
                <td>{{$player->name}}</td>
                <td>{{$player->surname}}</td>
                <td>{{$player->email}}</td>
                <td>{{$player->phone}}</td>
                <td>{{$player->about}}</td>
                <td><a href="{{action('Admin\PlayersController@edit',['player'=>$player->id])}}">rediģēt</a></td>
                <td>
                    <form method="POST" action="{{action('Admin\PlayersController@destroy',['player'=>$player->id])}}">
                        <input type="hidden" name="_method" value="delete"/>
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="submit" value="Izdzēst"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        @if(Session::has('message'))
            {{Session::get('message')}}
        @endif
        
        
        <div class="clear"></div>
    </body>
</html>