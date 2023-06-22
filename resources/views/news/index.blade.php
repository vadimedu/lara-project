@extends('main')
@section('content')
    @foreach ($newsList as $newsItem)
        <div style="border: 1px solid teal;">
            {{ $newsItem['title']}}
            {{ $newsItem['author'] }}
        </div>
    @endforeach
@endsection