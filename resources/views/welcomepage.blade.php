@extends('layouts.layout')
@include('partials.navbar')
<h3>Input your post</h3>
<div style="border:3px solid black;">
    <form action="/create_post" method="POST">
        @csrf
        <input type="text" name="title" placeholder="title"><br>
        <textarea name="body" cols="50" rows="16" placeholder="Input your Note..."></textarea><br>
        <button type="submit">Save Post</button>
    </form>
    <div style="boreder:3px solid black;">
    <h2>My Posts</h2>
    @foreach($posts as $post)
    <div style="background-color: gray;padding:10px; margin:10px;">
        <h3>{{$post['title']}}</h3>
        {{$post['body']}}
    </div>
    @endforeach
</div>
</div>
<form action="/logout" method="POST">
    @csrf
    <button>Logout</button>
</form>
