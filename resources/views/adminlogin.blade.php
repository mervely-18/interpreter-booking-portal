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
    cursor: pointer;
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
</style>

<html>
<body>
    <nav class="navbar">
        <a href="{{ route('welcome') }}">Logout</a>
    </nav>
        
    <h1>Hello, Admin!</h1>
    
    <div>
        <form action="{{ route('adminlogin.submit') }}" method="post">
            @csrf
            <input type="email" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <button type="submit" class="button">Admin Login</button>
        </form>
    </div>  
</body>
</html>

// username for admin is admin@example.com  | password is Hello_123