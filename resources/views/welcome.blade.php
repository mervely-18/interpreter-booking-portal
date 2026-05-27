<?php
?>

<style>
body {
    background-color: #2d3748;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 50px;
    font-family: sans-serif;
}
.navbar a {
    color:#ffffff;
    margin-right: 20px;
    text-decoration: none;
    font-size: 18px;
    font-weight: bold;
}
h1 {
    text-align: center;
    text-decoration: none;
    margin-inline: 20px;
    color:#ffffff;
}
input {
    margin: 15px;
    padding: 8px;
    font-size: 16px;
    border-radius: 6px;
    border: none;
    display: block;
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
.signup-link {
    color:#ffffff;
    text-decoration: none;
    font-size: 14px;
    margin-top: 10px;
}
</style>

<html>
<body>

<nav class="navbar">
    <a href="{{ route('register.page') }}">Register</a>
    <a href="{{ route('adminlogin') }}">Admin Login</a>
</nav>

<h1>If you are an existing user, please log in below:</h1>
<div>
    <form action="{{ route('login.submit') }}" method="post">
        @csrf
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button type="submit" class="button">Login</button>
    </form>
</div>

<a href="{{ route('register.page') }}" class="signup-link">Don't have an account?</a>

</body>
</html>
