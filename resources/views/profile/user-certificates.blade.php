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
    <a href="{{ route('main-logged-in') }}" class="w3-bar-item w3-button"><b>KU</b> Events</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="{{ route('student-create-event') }}" class="w3-bar-item w3-button">Create</a>
      <a href="{{ route('student-profile') }}" class="w3-bar-item w3-button">My Profile</a>
      <a href="{{ route('main-public') }}" class="w3-bar-item w3-button">Log Out</a>
    </div>
  </div>
</div>

<div align="center">
    <h1> - </h1>
    <img src="https://marketplace.canva.com/EAFNlUJs5g4/2/0/1600w/canva-white-simple-certificate-of-appreciation-Fcz7KkZ5YaU.jpg" style="width:60%">
    <a href="{{ route('student-profile') }}">
      <p><button class="w3-button w3-light-grey w3-block" style="width:200px">Back To Profile</button></p>
    </a>
  </div>

</body>
