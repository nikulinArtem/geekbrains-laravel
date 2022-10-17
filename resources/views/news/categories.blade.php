@extends('layouts.main')

@section('title')
    @parent Категории
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    @forelse($categories as $category)
        <a href="{{ route('news.category.show', $category['slug']) }}">
            <h3>{{ $category['title'] }}</h3>
        </a>
    @empty
        Нет категорий
    @endforelse
@endsection
