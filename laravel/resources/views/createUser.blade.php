@extends('template')

@section('contenu')
    {!! Form::open(['url' => 'users']) !!}
        {!! Form::label('pseudo', 'Entrez votre nom : ') !!}
        {!! Form::text('pseudo') !!}
        {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}
@endsection