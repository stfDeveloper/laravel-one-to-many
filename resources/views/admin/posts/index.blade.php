@extends('layouts.app')

    <div class="header">
        <a class="logo" href="{{route("admin.home")}}">
            BoolPress
        </a>
        <a href="{{route("admin.posts.create")}}">
            Nuovo post
        </a>
    </div>
<div class="PostContainer">
    @foreach ($posts as $post)
    <div class="postCard">
            <div class="postTitle">
                {{$post->title}}
            </div>
            <div class="postContent">
                {{$post->content}}
            </div>
        </div>    
        <a href="{{route("admin.posts.edit", $post->id)}}"><button class="trigger">Modifica</button></a>
        <a href="{{route("admin.posts.show", $post->id)}}"><button class="trigger">Vedi</button></a>
    @endforeach
</div>

