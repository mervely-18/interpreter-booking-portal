<?php
?>
<style>
body {
    background-color: #2d3748;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 50px;
}
.navbar a {
    margin-right: 20px;
    text-decoration: none;
    color:#ffffff;
    font-size: 18px;
    font-weight: bold;
    align-items: center;
    justify-content: center;
}
input {
    margin: 15px;
    padding: 8px;
    font-size: 16px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    display: block;
}
h1 {
    text-align: center;
    text-decoration: none;
    margin-inline: 20px;
    color:#ffffff;
}
.button {
    width: 100px;       
    margin: 15px;
    padding: 8px;
    cursor: pointer;
    border: none;
    border-radius: 6px;
    font-weight: 500;
}
.line {
    color: #ffffff;
    font-size: 14px;
    text-align: center;}
.navbar a {
    color:#ffffff;
    margin-right: 20px;
    text-decoration: none;
    font-size: 18px;
    font-weight: bold;
}

</style>

<html>
<body>

<nav class="navbar">
    <a href="{{ route('welcome') }}">Home</a>
    <a href="{{ route('adminlogin') }}">Admin Login</a>
</nav>

<h1>Create an account:</h1>

<div>
    <form action="{{ route('register.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
        <input type="email" name="email" placeholder="email" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="password_confirmation" placeholder="confirm password">
        <button type="submit" class="button">Register</button>
    </form>    
</div>

<div>
    <p class="line">Please note your password must be at least 8 characters long.</p>
</div>

</body>
</html>
