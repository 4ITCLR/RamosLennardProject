<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
    <h1>Welcome</h1>
</header>

<nav>
    <ul>
        <li><a href='about'>about</a></li>
       
    </ul>
</nav>

@extends('layout')

@section('title', 'Welcome')

@section('content')
<section>
    <h2>Welcome</h2>
    <p>Welcome to our website.</p>
</section>
@endsection
</body>
</html>