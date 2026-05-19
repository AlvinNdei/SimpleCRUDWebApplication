@extends('layouts.layout')
@include('partials.navbar')
<h4>Login Page</h4>
<div style="border:3px solid black;">
    <h2>LogIn</h2>
    <form action="/login" method="POST">
        @csrf
        <label>Email</label><br>
        <input type="email" name="email" placeholder="Email"><br>
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button>Log In</button>
    </form>
</div>
