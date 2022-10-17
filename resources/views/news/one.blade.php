@extends('layouts.main')

@section('title')
    @parent Новость {{ $news['id'] }}
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    @if($news)
        @if(!$news['isPrivate'])
            <h3>{{ $news['title'] }}</h3>
            <p>{{ $news['text'] }}</p>
        @else
            <p>Зарегистрируйтесь для просмотра</p>
        @endif
    @else
        <p>News not found</p>
    @endif
@endsection

