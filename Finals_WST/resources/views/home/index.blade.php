@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Dashboard</h1>
        <p class="lead">Everything is all about knowledge! Knowledge is the one that will make us knowledgeable. Char!</p>
        @endauth
        
        @guest
        <h1>Homepage</h1>
        <p class="lead">Hello dear user! Have a great day.</p>
        @endguest
    </div>
@endsection
