@extends('pages.main')

@section('content')
<section id="content">
    <article class="news">
        @foreach($staff as $person)
        <div class="img_left">
            <img alt="{{$person->name}}" src="../img/photos/team/{{$person->photo}}" width="200" height="200"></img>
        </div>
        <h3>{{$person->name}} {{$person->surname}}</h3><br>
        <p class="content">
            talrunis: {{$person->phone}}<br>
            e-mail: {{$person->email}}<br></p>
        <div class="clear"></div>
        @endforeach
        <footer>
            <p class="content">Rīga, Stabu iela 60, Latvija LV-1011<br>
                               Biroja tālrunis: 67809433</p>    
        </footer>
    </article>
</section>
@stop