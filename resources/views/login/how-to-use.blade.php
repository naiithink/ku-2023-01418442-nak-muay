<!DOCTYPE html>
<html>

<head>
    <title>KU Events</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/theme.css">
</head>

<body>
    <div class="w3-yellow-p"></div>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar mint-b w3-wide w3-padding w3-card">
            <a href="{{ route('main-public') }}" class="w3-bar-item w3-button"><b>KU</b> Events</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="{{ route('how-to-use') }}" class="w3-bar-item w3-button">How To Use</a>
                <a href="{{ route('login') }}" class="w3-bar-item w3-button">Log In</a>
                <a href="{{ route('signup') }}" class="w3-bar-item w3-button">Sign Up</a>
            </div>
        </div>
    </div>

    <div align="center">
        <h1> - </h1>
        <h1> How To Use</h1>
        <h3> info... </h3>

        {{--
        <a href="{{ route('login') }}">
            <p><button class="w3-button w3-light-grey w3-block" style="width:200px">Back</button></p>
        </a>
        --}}
    </div>

    <body>

</html>
