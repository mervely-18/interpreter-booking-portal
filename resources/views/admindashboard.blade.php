<?php
?>

<style>
body {
    background-color: #111827;
    color: white;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 40px;
}

.navbar {
    width: 100%;
    display: flex;
    justify-content: flex-end;
    margin-bottom: 30px;
}

.navbar a {
    color: #ffffff;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    background-color: #374151;
    padding: 10px 18px;
    border-radius: 8px;
}

.navbar a:hover {
    background-color: #4b5563;
}

.dashboard-container {
    max-width: 1000px;
    margin: auto;
}

h1 {
    text-align: center;
    margin-bottom: 10px;
}

.subtitle {
    text-align: center;
    color: #d1d5db;
    margin-bottom: 30px;
}

.user-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 20px;
}

.user-card {
    background-color: #ffffff;
    color: #111827;
    padding: 22px;
    border-radius: 16px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
    text-align: left;
}

.user-card:hover {
    transform: translateY(-4px);
    transition: 0.3s;
}

.user-card p {
    margin: 10px 0;
}

.delete-btn {
    margin-top: 15px;
    background-color: #dc2626;
    color: white;
    border: none;
    padding: 10px 16px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
}

.delete-btn:hover {
    background-color: #b91c1c;
}
.edit-btn {
    background-color: #dc2626;
    color: white;
    border: none;
    padding: 10px 16px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
}
.edit-btn:hover {
    background-color: #b91c1c;
}
</style>

<!DOCTYPE html>
<html>
<body>

<nav class="navbar">
    <a href="{{ route('welcome') }}">Log out | Home</a>
</nav>

<div class="dashboard-container">

    <h1>Private Admin Dashboard</h1>
    <p class="subtitle">All registered user details are shown below</p>

    <div class="user-grid">
        @foreach($users as $user)
        

        <div class="user-card">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>

            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="delete-btn" type="submit">Delete</button>
            </form>

            <a href="{{ route('users.edit', $user->id) }}" class="edit-btn">
    Edit
</a>

            <p><strong>Created At:</strong> {{ $user->created_at }}</p>
        </div>
        

        @endforeach
    </div>

</div>

</body>
</html>