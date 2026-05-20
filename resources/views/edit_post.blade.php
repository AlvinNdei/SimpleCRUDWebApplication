@extends('layouts.layout')
<div>
    <form action="/edit_post/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$post->title}}">
        <textarea name="body">{{$post->body}}</textarea>
        <button>Save changes</button>
    </form>
</div>