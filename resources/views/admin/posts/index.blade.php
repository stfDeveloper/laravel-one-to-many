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
                <div> 
                    {{$post->title}}
                </div>
            </div>
            <div>
                category:{{$post->category? $post->category->type:'-'}}
            </div>
            
            <div class="postContent">
                    {{$post->content}}
            </div>
            <div>
                @if ($post->image != null)
                <img class="image" src="{{ asset('images/'. $post->image) }}" alt="">
                @else 
                <img class="image" src="{{ asset('images/noimage.png')}}" alt="">
                @endif
            </div>
        </div>    
        <div class="buttons">
            <a href="{{route("admin.posts.edit", $post->id)}}"><button>Modifica</button></a>
            <a href="{{route("admin.posts.show", $post->id)}}"><button>Vedi</button></a>
            <form action="{{route("admin.posts.destroy", $post->id)}}"onsubmit="return confirm ('cancellare?') "method="POST" >
                @csrf
                @method("DELETE")
                <button type="submit">delete</button>
            </form>
        </div>
    @endforeach
</div>

