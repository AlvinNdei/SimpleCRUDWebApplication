@extends('layouts.layout')
<h3>Input your post</h3>
<div  style="border:3px solid black;">
    <form action="/create_post" method="POST">
        @csrf
        <input class="box1" type="text" name="title" placeholder="title"><br>
        <textarea class="box1" name="body" cols="50" rows="16" placeholder="Input your Note..."></textarea><br>
        <button type="submit">Save Post</button>
    </form>
    
    <h2>My Posts</h2>
    @foreach($posts as $post)
    <div class="box1" style="padding:10px; margin:10px;">
        <h3>{{$post['title']}}</h3>
        {{$post['body']}}
        
        <p><a href="{{ route('post.edit', $post->id) }}"">Edit</a></p>
        <form action="/delete{{$post->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn1">Delete</button>
        </form>
    </div>
    
    @endforeach
</div>
</div>
<form action="/logout" method="POST">
    @csrf
    <button>Logout</button>
</form>
