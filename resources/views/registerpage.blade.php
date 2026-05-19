@extends('layouts.layout')
@include('partials.navbar')
<div style="border:3px solid black;">
    <h2>Register</h2>
    <form action="/register" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" name="name" placeholder="Full Name">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password">
        <button>Register</button>
    </form>
</div>
