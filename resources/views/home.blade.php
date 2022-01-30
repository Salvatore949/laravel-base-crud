@extends('layouts.base')
@section('main')
    <h1>Comic List</h1>
    <ul>
        @foreach($comics as $comic)
        <li>
            <a href="{{ route('show', $comic -> id)}}">
            {{ $comic ->title }}
            <\a>
        </li>
        @endforeach
    </ul>
@endsection