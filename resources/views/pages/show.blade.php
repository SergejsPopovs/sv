@extends('pages.main')

@section('content')
<section id="content">
    <article class="news">
        <header>
            <h1 class="new-header">{{$new->title}}</h1>
            <p class="published">{{$new->created_at}} {{$new->author}}</p>
        </header>
        <div class="img_left">
            <img alt="{{$new->photo->location}}" src="{{$new->photo->location}}" width="{{$new->photo->width}}" height="{{$new->photo->height}}"></img>
        </div>
        <p class="content">{!!$new->full_text!!}<br><br></p>
        <div class="clear"></div>
        <footer class="new-list">
            <div class="views" title="views count">{{$new->views_count}}</div>
            <div class="com-vol" title="comments count">{{$new->comments_count}}</div>
        </footer>
    </article>
</section>
@stop


