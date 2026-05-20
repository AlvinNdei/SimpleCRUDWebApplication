@extends('layouts.layout')
<div>
    <form action="{{ route('post.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$post->title}}">
        <textarea name="body" >{{$post->body}}</textarea>
        <button>Save changes</button>
    </form>
</div>