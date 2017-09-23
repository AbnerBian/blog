@extends('layout.app')

@section('content')
    <a href="{{ route('articles.create') }}" style="padding:5px;border:1px dashed gray;">
        + New Article
    </a>

@foreach ($articles as $article)
    <div style="border:1px solid gray;margin-top:20px;padding:20px;">
        <h2>{{ $article->title }}</h2>
        <p>{{ $article->content }}</p>
        <a href="{{ route('articles.edit', $article->id ) }}">Edit</a>
        <form action="{{ route('articles.destroy', $article->id) }}" method="post" style="display: inline-block;">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" style="color: #F08080;background-color: transparent;border: none;">Delete</button>
        </form>
    </div>
@endforeach
@endsection
<!-- header -->
<div class="header">
    <div class="logo">
        <a href="#"><h2>Myweb</h2></a>
    </div>

    <div class="menu">
        <a href="{{ route('articles.index') }}">Articles</a>
    </div>
</div>

<div class="content">
    <div class="left">
        @yield('content')
    </div>

    <div class="right">
        <!-- 这里 -->
        <div style="padding:20px;border:1px solid black;">
            <h3>Author</h3>
            <p>name : SadCreeper</p>
            <p>age : 22</p>
            <p>Tel : 150-XXXX-XXXX</p>
        </div>
        <!-- 这里 -->
    </div>
</div>