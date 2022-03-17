@extends('layouts.app')
<div class="PostContainer">
    <div class="postCard">
        <div class="postTitle">
            {{$post->title}}
        </div>
        <div  class="postContent">
            {{$post->content}}
        </div>
    </div>    
    <a href="{{route("admin.posts.index")}}"><button type="button">back</button></a>
</div>

