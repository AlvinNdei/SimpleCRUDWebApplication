@extends('layouts.layout')
@include('partials.navbar')
@section('content')
<div style="border:3px solid white;">
    <h2>Register</h2>
    <form action="/register" method="POST">
        @csrf
        <label>Name</label><br>
        <input type="text" name="name" placeholder="Full Name"><br>
        <label>Email</label><br>
        <input type="email" name="email" placeholder="Email"><br>
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button>Register</button>
    </form>
</div>
@endsection