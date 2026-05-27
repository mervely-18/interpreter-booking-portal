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
    color: white;

}
h1 {
    text-align: center;
    text-decoration: none;
    margin-inline: 20px;
    color:#ffffff;
}
.navbar a {
    color:#ffffff;
    margin-right: 20px;
    text-decoration: none;
    font-size: 18px;
    font-weight: bold;
}
.userInput {
    background-color: white;
    color: black;
    padding: 20px;
    margin: 10px;
    border-radius: 8px;
    text-align: center;
}
.dropdown {
    position : relative;
    display: inline-block;
    color: black;   
    align-items: center;
    justify-content: center;
}
.dropdown:hover {
    background-color: white;
    transform: scale(1.02);
}
.box {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    align-items: center;
    display: flex;
    flex-direction: column;
}
.submit-btn {
    margin-top: 20px;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    background-color: #4a5568;
    color: white;
}
.submit-btn:hover {
    transform: scale(1.02);}

</style>
<body>

<nav class="navbar">
    <a href="{{ route('adminlogin') }}">Admin Login</a>
</nav>

<h1>Welcome to the Main Page</h1>

<div class="box">

<form action="{{ route('profile.update') }}" method="POST">

    @csrf

    <div class="userInput">

        <p>Please enter your address</p>
        <input type="text" name="address" placeholder="Enter your address">

        <p>Please enter your phone number</p>
        <input type="text" name="phone" placeholder="Enter phone number">

        <p>Please enter occupation</p>
        <input type="text" name="occupation" placeholder="e.g Dental appointment for client.">

        <p>Please select language</p>

        <select id="languageDropdown" class="dropdown" name="language">
            <option>Select Language</option>
        </select>

        <button class="submit-btn" type="submit">
            Submit
        </button>

    </div>

</form>

</div>

<script>
fetch('https://restcountries.com/v3.1/all?fields=languages')
.then(res => res.json())
.then(data => {

    const uniqueLanguages = new Set();

    const dropdown = document.getElementById('languageDropdown');

    data.forEach(country => {

        const languages = country.languages;

        if (languages) {

            for (const key in languages) {

                if (!uniqueLanguages.has(languages[key])) {

                    uniqueLanguages.add(languages[key]);

                    const option = document.createElement('option');

                    option.value = languages[key];

                    option.textContent = languages[key];

                    dropdown.appendChild(option);

                }

            }

        }

    });

});
</script>

</body>