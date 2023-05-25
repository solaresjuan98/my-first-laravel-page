@extends('template')

@section('content')

<h1>List</h1>

@foreach ($posts as $post)

<p>
    <strong>
        {{ $post['id'] }}
    </strong>

    <a href="{{ route('post', $post['slug']) }}">
        {{ $post['title'] }}
    </a>
</p>

@endforeach
@endsection