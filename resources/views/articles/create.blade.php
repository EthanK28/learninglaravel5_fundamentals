@extends('app')
@section('content')
    <h1>Write A New Aricle</h1>
    <hr/>
    {!! Form::open(['url'=>'articles']) !!}
    @include('articles.form', ['submitButtonText'=>'Add Article' ])


    {!! Form::close() !!}

    @include('errors.list')
@stop
