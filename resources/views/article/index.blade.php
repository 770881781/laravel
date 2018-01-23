@extends('article/app')
@section('content')
    @foreach($articles as $article)
    <article class="format-image group">
        <h2 class="post-title pad text-center">
            <a href="/public/article/show/{{ $article->id }}" style="text-decoration:none;"> {{ $article->title }}</a>
        </h2>
        <br>
        <div class="post-inner">
            <div class="post-deco">
                <div class="hex hex-small">
                    <div class="hex-inner"><i class="fa"></i></div>
                    <div class="corner-1"></div>
                    <div class="corner-2"></div>
                </div>
            </div>
            <div class="post-content pad">
                <div class="entry custome">
                    {{ $article->intro }}。。。
                </div>
                <a class="more-link-custom" href="/public/article/show/{{ $article->id }}"><span><i>查看</i></span></a>
            </div>
        </div>
    </article>
    @endforeach        
    <a class="more-link-custom" href="/public/article/create"><button type="button" class="btn btn-success">添加文章</button></a> 
@endsection