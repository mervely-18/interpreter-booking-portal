<php?

?>

<style>
.edit-page {
    background-color:#111827;
; 
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
    background-color: #374151;
}
  
.edit-page {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #111827;
}


.body {
    display: flex;
    flex-direction: column;
    align-items: center;

    border-radius: 10px;
    padding: 20px;


}



</style>



<HTML>
<body class="edit-page">
    <nav class="navbar">
    <a href="{{ route('admindashboard.page') }}">Go to Dashboard</a>
    <a href="{{ route('welcome') }}">Log out | Home</a>
</nav>

    <div class="body">
    <form action="{{ route('users.update', $user->id) }}" method="POST">

    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $user->name }}">

    <input type="email" name="email" value="{{ $user->email }}">

    <input type="password" name="password" placeholder="New Password">

    <button type="submit">Save Changes</button>
    </div>

</form>




</body>

</HTML>

