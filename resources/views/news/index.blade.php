@extends('layouts.main')

@section('title')
    @parent Новости
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <h3>Новости</h3>
    @forelse($news as  $item)
        <a href="{{route('news.show', $item['id']) }} ">{{ $item['title'] }}</a><br>
    @empty
        <h4>Нет новостей</h4>
    @endforelse

@endsection

