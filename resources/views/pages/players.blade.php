@extends('pages.main')

@section('content')
<section id="content">
    <article class="news">
        @foreach($players as $person)
        <div class="img_left">
            <img alt="{{$person->name}}" src="../img/photos/team/{{$person->photo}}" width="200" height="200"></img>
        </div>
        <h3>{{$person->name}} {{$person->surname}}</h3><br>
        <p class="content">{{$person->about}}<br>
        </p>
        <div class="clear"></div>
        @endforeach
    </article>
</section>
@stop

