@extends('layouts.layout')
<div style="border:3px solid black; background-color:gray;">
    <form action="{{ route('post.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Title</label><br>
        <input type="text" name="title" value="{{$post->title}}">
        <h3>Edit your post</h3>
        <textarea name="body" >{{$post->body}}</textarea><br>
        <button>Save</button>
    </form>
</div>