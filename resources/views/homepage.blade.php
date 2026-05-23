@extends('layouts.layout')
@include('partials.navbar')   
@section('content')
<h1 style="text-align: center;"><u>Welcome to MyNotes App.</u></h1>
<div>
    <h2 style="text-align:center;">Elevate your creativity!</h2>
    <p style="text-align:center;">MyNotes App keeps you creative 24/7.</p>
    <p style="text-align: center;">We capture knowledge, inspirations, and help you be on schedule with you day to day side quests.</p>
</div>
<div>
    <img class="image" src="{{ asset('build/assets/images/Untitled.jpg') }}" alt="image of a person taking notes.">
    <p style="text-align: center;"><i>Escape the manual Labor.</i></p>
    <p style="text-align: center;"><i>Digitalize your Notes.</i></p>
</div>
<footer>
    <p>© Copyright 2026 Designed and Built by Alvin Ndei| All Rights Reserved.</p>
</footer>
<script src="{{asset('app.js')}}"></script>
@endsection