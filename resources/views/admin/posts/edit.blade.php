@extends('layouts.app')

<div class="containerCrea">
<form action="{{route('admin.posts.update', $post->id)}}" method="post">
@csrf
@method('PUT')
    <div class="form-group">
        <input type="text" id="inputTitle" name="title" placeholder="Nuovo titolo" value="{{$post->title}}">
    </div>
    <div class="form-group">
        <textarea name="content" id="inputContent">{{$post->content}}</textarea>
    </div>
    <button type="submit">Salva</button>
    <a href="{{route("admin.posts.index")}}"><button type="button">back</button></a>
    </div>
</form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

