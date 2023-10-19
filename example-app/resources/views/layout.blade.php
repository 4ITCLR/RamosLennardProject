<!DOCTYPE html>
<html>
<head>
    <title>Layout</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
</head>
<body>

<header>
    <h1>Layout</h1>
</header>

<nav>
    <ul>
        <li><a href="{{ route('welcome') }}">Welcome</a></li>
        <li><a href="{{ route('products') }}">Products</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('checkout') }}">Checkout</a></li>
        <li><a href="{{ route('contacts') }}">Contacts</a></li>
    </ul>
</nav>

<div class="content">
    
</div>

</body>
</html>