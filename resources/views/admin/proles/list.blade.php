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
        
        <table id="from-post">
            <tr>
                <th>id</th>
                <th>lomas nosaukums</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($proles as $prole)
            <tr>
                <td>{{$prole->id}}</td>
                <td>{{$prole->title}}</td>
                <td><a href="{{action('Admin\ProlesController@edit',['prole'=>$prole->id])}}">rediģēt</a></td>
                <td>
                    <form method="POST" action="{{action('Admin\ProlesController@destroy',['prole'=>$prole->id])}}">
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