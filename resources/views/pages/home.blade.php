@extends('pages.main')

@section('content')
<section id="content">
    @foreach($news as $new)
    <article class="news">
        <header>
            <h1 class="new-header">
                <a class="hew-title-list" href="{{action('MainController@show',['id'=>$new->id])}}">{{$new->title}}</a>
                <p class="published">{{$new->created_at}} {{$new->author}}</p>
            </h1>
        </header>
        <div class="img_left">
            <img alt="{{$new->photo->location}}" src="{{$new->photo->location}}" width="{{$new->photo->width}}" height="{{$new->photo->height}}"></img>
        </div>
        <p class="content">{{$new->short_text}}<br><br></p>
        <a class="button" href="{{action('MainController@show',['id'=>$new->id])}}">vairak</a>
        <div class="clear"></div>
        <footer class="new-list">
            <div class="views" title="views count">skatījumi: {{$new->view_count}}</div>
        </footer>
    </article>
    @endforeach
</section>
@stop

