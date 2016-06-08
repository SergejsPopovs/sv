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
        
        <h2>Jaunumu saraksts</h2>
        <table id="from-post">
            <tr>
                <th>id</th>
                <th>attēls</th>
                <th>nosaukumss</th>
                <th>autors</th>
                <th>īss teksts</th>
                <th>pilns teksts</th>
                <th>skatījumi</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td><img width="100" height="100" src="{{$article->photo->location}}"</td>
                <td>{{$article->title}}</td>
                <td>{{$article->author}}</td>
                <td>{{$article->short_text}}</td>
                <td>{{$article->full_text}}</td>
                <td>{{$article->view_count}}</td>
                <td><a href="{{action('Admin\ArticlesController@edit',['article'=>$article->id])}}">rediģēt</a></td>
                <td>
                    <form method="POST" action="{{action('Admin\ArticlesController@destroy',['article'=>$article->id])}}">
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