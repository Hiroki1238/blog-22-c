@extends('layouts.app')

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    
    <body>
        <h1>Blog Name<h1> <!--動画見て追加した記述-->
        
        <h1 class="title">
            {{ $post->title }} <!--controllerで宣言した文字列をbladeでは変数として使える-->
        </h1>
        
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>  
                <p class = 'updated_at'>{{$post->updated_at}}</p> <!--説明動画にあった-->
            </div>
        </div>
        
        <div class="footer">
            <a href="">{{ $post->category->name }}</a><br>  <!-- 9-2 -->
            <a href="/">戻る</a>
        </div>
        
    </body>
</html>
@endsection