@extends('layouts.main')

@section('title')
    @parent Категории
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <h3>Новости категории  {{ $category }}</h3>
    @forelse($news as $item)
        <h4>{{ $item['title'] }}</h4>
        @if (!$item['isPrivate'])
            <a href="{{ route('news.show', $item['id']) }}">Подробнее..</a>
        @endif
    @empty
        Нет новостей
    @endforelse
@endsection
