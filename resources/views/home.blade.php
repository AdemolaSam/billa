@extends('layouts.default')

@section('header')
<h1>Home</h1>
<p>Go to <a href="{{ route('contact') }}">contact</a></p>
@endsection

@section('maincontent')
<form action="{{ route('formsubmitted') }}" method="post">
    @csrf
<label for="fullname">Enter your name</label>
<input type="text" name="fullname" placeholder="Type your fullname" required>
<br><br>
<label for="">Enter your email</label>
<input type="email" name="email" placeholder="Type your email" required>
<br><br>
<button type="submit">Submit form</button>
</form>
@endsection
