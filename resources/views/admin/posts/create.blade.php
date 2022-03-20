@extends('layouts.app')

<div class="header">
    <a class="logo" href="{{route("admin.home")}}">
        BoolPress
    </a>
    <a class="logo" href="{{route("admin.posts.index")}}">
        Indietro
    </a>

</div>
<div class="containerCrea">
    <form action="{{route("admin.posts.store")}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="title" id="inputTitle" placeholder="inserisci il titolo">
        </div> 
        <div class="form-group">
            <select name="category_id" id="">
                <option value="">----</option>
                @foreach ($categories as $element)
                <option value="{{$element->id}}">{{$element->type}}</option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="image"></label>
                <input type="file" name="image">
            </div>
        </div> 
        <div class="form-group">
            <textarea  class="form-control" name="content" id="inputContent"></textarea>
        </div>

        <button type="submit">Aggiungi</button>
        </form>
    </div>
        @if ($errors->any())
        <div class="errorTable">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
    </div>
        @endif
</div>

