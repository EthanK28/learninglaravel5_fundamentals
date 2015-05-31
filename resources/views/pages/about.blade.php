@extends('app')
@section('content')
    <h1> About me </h1>

    @if($people)
        <h3>People I like: </h3>
        <ul>

            @foreach ($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
    @else
        <h3>I don't have anyone I like</h3>
    @endif

    <p>
        Lorem ipsum dolor sit amet,

    </p>

@stop
