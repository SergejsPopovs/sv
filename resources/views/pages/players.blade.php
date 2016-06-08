@extends('pages.main')

@section('content')
<section id="content">
    <article class="news">
        @foreach($players as $person)
        <div class="img_left">
            <img alt="{{$person->name}}" src="{{$person->photo->location}}" width="200" height="200"></img>
        </div>
        <h1 class="new-header">{{$person->name}} {{$person->surname}}</h1>
        <h4>{{$person->prole->title}}</h4><br>
        <p class="content">{{$person->about}}<br>
        </p>
        <div class="clear"></div>
        @endforeach
    </article>
</section>
@stop

