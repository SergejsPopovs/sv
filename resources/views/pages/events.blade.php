@extends('pages.main')

@section('content')
<section id="content">
    <article class="news">
        <h1 class="new-header">Sacensibu kalendars 2016. gadam</h1>
        <table id="from-post">
            <tr>
                <th>Datums</th>
                <th>Sacensibu nosaukums</th>
                <th>Norises vieta</th>
            </tr>
            @foreach($events as $event)
            <tr>
                <td>{{$event->begin_date}} - {{$event->end_date}}</td>
                <td>{{$event->title}}</td>
                <td>{{$event->place}}</td>
            </tr>
            @endforeach
        </table>
    </article>
    
</section>
@stop
